<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(Request $request)
    {

        $aricles = Article::orderBy('updated_at', 'desc')
            ->when($request->count > 0, function($q) use ($request) {
                $q->limit($request->count);
            })
            ->get();

        return [
            'data' => ArticleResource::collection($aricles),
            'status' => true,
            'message' => 'All results retrieved'
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Article $article
     * @return Response
     */
    public function store(Request $request, Article $article)
    {
        $article->slug = Str::slug($request->title, '-');
        $article->title = $request->title;
        $article->tag = $request->tag;
        $article->content = $request->content;
        $article->date = $request->date;
        $article->image_link = 'uploads/'.$request->image->storeAs('articles/images', time().'.'.$request->image->getClientOriginalExtension());
        $article->save();

        return response()->json(['success' => true, 'message' => 'Success']);
    }

    /**
     * Display the specified resource.
     *
     * @param Article $article
     * @return ArticleResource
     */
    public function show(Article $article)
    {
        return new ArticleResource($article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Article $article
     * @return ArticleResource
     */
    public function update(Request $request, Article $article)
    {

        if ($request->hasFile('image')) {
            File::delete(public_path($article->image_link));
            $imageLink = 'uploads/'.$request->image->storeAs('articles/images', time().'.'.$request->image->getClientOriginalExtension());
            $article->image_link = $imageLink;
        }

        $article->slug = Str::slug($request->slug, '-');
        $article->title = $request->title;
        $article->content = $request->content;
        $article->date = $request->date;
        $article->tag = $request->tag;
        $article->save();

        return response()->json(['success' => true, 'message' => 'Success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return Response
     * @throws \Exception
     */
    public function destroy(Article $article)
    {
        File::delete(public_path($article->image_link));
        $article->delete();
        return response()->json([ 'success' => true ]);
    }
}
