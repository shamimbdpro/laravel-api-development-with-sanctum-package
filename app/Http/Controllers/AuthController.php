<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    /**
     * Register new user.
     * 
     * @return string|array
     */
    public function register(Request $request)
    {
        // Validation.
        $inputValues = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
        ]);

        // Create user.

        $user = User::create([
            'name' => $inputValues['name'],
            'email' => $inputValues['email'],
            'password' => bcrypt($inputValues['password']),
        ]);

        // Generate token.
        $token = $user->createToken('myapptoken')->plainTextToken;

        // Send Response.
        return response()->json([
            'status' => 1,
            'message' => 'User Registration Sucessfull',
            'token' => $token,
            'data' => $user,

        ], 201);
    }


    /**
     * User login
     *
     * @return string|mixed
     */
    public function login(Request $request)
    {
       // Validation.
       $inputValues = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);


    // Check student.
    $User = User::where('email', $request->email)->first();

    if(isset($User->id)){
        if(Hash::check($request->password, $User->password)){

            $token = $User->createToken('login_token')->plainTextToken;
            return response()->json([
                'status' => 1,
                'message' => 'User Loggin Successfully.',
                'access_token' => $token
            ]);

        }else{
            return response()->json([
                'status' => 0,
                'message' => 'Password did\'nt match'
            ], 404);
        }
       
    }else{
        return response()->json([
            'status' => 0,
            'message' => 'User not found'
        ], 404);
    }

    }


    /**
     * Logout the User.
     * 
     * @return boolean
     */
    public function logout(){
        auth()->user()->tokens()->delete();

        return response()->json([
            'status' => 1,
            'message' => 'Logout Successfull'
        ]);
    }
}
