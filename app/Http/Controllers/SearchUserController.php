<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchUserController extends Controller
{
    public function findRecord(Request $request)
    {
        {
            $keyword = $request->input('keyword');


            if (empty($keyword)) {
                return response()->json([]); // No query provided, return an empty result
            }

            $perPage = 5;
            $results = User::search($keyword)->orderBy('created_at', 'desc')->take($perPage)->get();
            return response()->json( $results);
        }
    }
}
