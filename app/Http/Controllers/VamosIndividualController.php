<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VamosIndividual;

class VamosIndividualController extends Controller
{
    public function findRecord(Request $request)
    {
       $records = VamosIndividual::search($request->input('query'))->get();
       return response()->json($records);
    }
}
