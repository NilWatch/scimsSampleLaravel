<?php

namespace App\Http\Controllers;

use App\Models\AccountType;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return User::orderBy('created_at', 'desc')->limit(10)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertUserData(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'entity_no' => 'required',
            'username' => 'required|unique:user_accounts',
            'job_position' => 'required',
            'fullname' => 'required',
            'department' => 'required',
            'division' => 'required',
            'section' => 'required',
            'password' => 'required',
            'vamosModule' => 'required',
            'resbakunaModule' => 'required',
            'doctrackModule'=> 'required',

        ]);

        do {
            $letters = Str::random(6);
            $numbers = rand(1000,9999);
            $user_id = $letters.$numbers;
        } while (User::where('user_id', $user_id)->exists());

        // Step 1: Create a new user record in userTable
        $user = User::create([
            'entity_no' => $validatedData['entity_no'],
            'fullname' => $validatedData['fullname'],
            'department' => $validatedData['department'],
            'division' => $validatedData['division'],
            'section' => $validatedData['section'],
            'username' => $validatedData['username'],
            'job_position' => $validatedData['job_position'],
            'password' => $validatedData['password'],
            'user_id' => $user_id,
        ]);

        // Step 2: Create a record in accountTypeTable
        $accountType = AccountType::create([
            'vamos_sys' => $validatedData['vamosModule'],
            'resbakuna_sys' => $validatedData['resbakunaModule'],
            'doctrack_sys' => $validatedData['doctrackModule'],
            'entity_no' => $validatedData['entity_no'], // Foreign key to link the record to the user
        ]);

        return response()->json(['user' => $user, 'accountType' => $accountType], 201);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['user' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user): JsonResponse
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:user_accounts,username,' . $user->id,
            'job_position' => 'required',
            'fullname' => 'required',
            'department' => 'required',
            'division' => 'required',
        ]);

        $user->update($validatedData);

        return response()->json(['user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user ): JsonResponse
    {
        $user->delete();
        return response()->json(['message'=>'User deleted Successfully']);
    }

}
