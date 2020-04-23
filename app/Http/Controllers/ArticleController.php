<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use Illuminate\Http\Request;
use App\Article;
use App\Http\Resources\ArticleResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        if ($num = request()->get('count')) {
            return [
                'data' => ArticleResource::collection(Article::with('tags')->orderBy('updated_at', 'desc')->limit($num)->get()),
                'status' => true,
                'message' => 'All results retrived'
            ];
        }
        return [
            'data' => ArticleResource::collection(Article::with('tags')->orderBy('updated_at', 'desc')->get()),
            'status' => true,
            'message' => 'All results retrived'
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleStoreRequest $request)
    {
        $article = new Article;
        $article->slug = str_slug($request->slug, '-');
        $article->title = $request->title;
        $article->content = $request->content;

        $img = $request->file('image_link');
        $name = time() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('/images/articles'), $name);
        $article->image_link = env('APP_URL') . '/images/articles/' . $name;

        $article->save();

        return response()->json($article, 201);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return ArticleResource
     */
    public function update(ArticleUpdateRequest $request, Article $article)
    {
        $article->slug = str_slug($request->slug, '-');
        $article->title = $request->title;
        $article->content = $request->content;

        if ($request->hasFile('imagel_link')) {
            $deleteOldImg = Str::replaceFirst(env('APP_URL'), public_path(), $article->image_link);
            Storage::delete($deleteOldImg);
            $img = $request->file('image_link');
            $name = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('/images/articles'), $name);
            $article->image_link = env('APP_URL') . '/images/articles/' . $name;
        }
        $article->save();

        return new ArticleResource($article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Article $article)
    {
        if ($article->delete()) {
            return response()->json(['success' => true, 'message' => 'Удалено']);
        }
    }
}
