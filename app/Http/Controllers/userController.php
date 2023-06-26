<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Models\User;
use Dotenv\Validator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class userController extends Controller
{
    public function signup(Request $request)
    {
            // ...
        $email = User::where('email', $request->input('email'))->get();
        if ($email->count() > 0) {
             return response()->json([ 'message' => "Email déjà utilisé"] , 403);
         } else {
            $signup = new User();
            $signup->name = $request->name;
            $signup->email = $request->email;
            $signup->password = Hash::make($request->password);
            $signup->save();
            return  ['result' => 'success'];
        };
    }
    public function signin(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
        {
            return response()
                ->json(['message' => 'please sign up first or verif your password'], 401);
        }

        $signin = User::where('email', $request['email'])->firstOrFail();

        $token = $signin->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['message' => 'Hi '.$signin->name.', welcome to home','access_token' => $token, 'token_type' => 'Bearer', ]);
    }//A3MLI WAHDA hoti fiha el signin lkol bech traja3lek eldonnes te3 el user
    /* public function signin(Request $request)
    {
            // ...
        $email = User::where('email', $request->input('email'))->get();
        if ($email->count() == 0) {
             return response()->json([ 'message' => "please sign up first"] , 403);
         }
        else {
            $password = User::where('password', $request->input('password'))->get();
            if($password->count() == 0){
                return response()->json([ 'message' => "verifier your password"] , 402);
            }
            else{
                return response()->json([ 'message' => "welcome"] , 200);
            }
        };
    } */
/*     public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    } */
}
