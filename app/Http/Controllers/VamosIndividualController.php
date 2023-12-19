<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VamosIndividual;

class VamosIndividualController extends Controller
{
    public function findRecord(Request $request)
        {
        $query = $request->input('query');

        if (empty($query)) {
            return response()->json([]); // No query provided, return an empty result
        }

        $perPage = 5; // Number of items per page, adjust as needed
        $records = VamosIndividual::search($query)->orderBy('created_at','desc')->take($perPage)->get();

        return response()->json($records);
    }
}
