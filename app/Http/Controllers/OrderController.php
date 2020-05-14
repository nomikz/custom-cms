<?php

namespace App\Http\Controllers;

use App\GovernanceMember;
use App\Member;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function updateOrder($id, Request $request)
    {
        // GovernanceMember and Member

        if ($request->model === 'GovernanceMember') {
            $model = GovernanceMember::find($id);
        } elseif ($request->model === 'Member') {
            $model = Member::find($id);
        }

        $success = $model->update(['order_number' => (int)$request->order_number]);
        return response()->json(['success' => $success]);
    }
}
