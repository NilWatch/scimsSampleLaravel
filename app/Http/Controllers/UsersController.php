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

        return User::with('accountType')
        ->select('id', 'entity_no', 'user_id', 'username', 'job_position', 'fullname', 'department', 'division', 'section', 'created_at', 'updated_at')
        ->orderBy('created_at', 'desc')
        ->limit(5)
        ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
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
            $user_id = (string) Str::uuid();
        } while (User::whereUser_id($user_id)->exists());

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
        return response()->json(['entity_no' => $id]);
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
            'section' => 'required'
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

    // public function searchUsers(Request $request)
    // {
    //     // Get the search query from the request
    //     $searchQuery = $request->input('keyword');

    //     // Use Eloquent to search for users with names containing the search query
    //     $users = User::where('entity_no', 'LIKE', "%$searchQuery%")
    //         ->orWhere('fullname', 'LIKE', "%$searchQuery%")
    //         ->orWhere('user_id', 'LIKE', "%$searchQuery%")
    //         ->orWhere('username', 'LIKE', "%$searchQuery%")
    //         ->get();

    //     // Return the search results as JSON
    //     return response()->json( $users::with('accounType'));
    // }


}
