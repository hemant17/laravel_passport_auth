<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Passpost\Client;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $check = User::where('email', $request->email)->first();
        if ($check) {
            if (Hash::check($request->password, $check->password)) {
                $token = $check->createToken('name')->accessToken;
                return response([
                    'token' => $token,
                ]);
            } else {
                return response([
                    'message'=>'Password is not correct'
                ], 401);
            }
        } else {
            return response([
                'message' =>'User does not exist'
            ], 401);
        }
    }

    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        return response([
            'message' => 'logged out successfully '
        ]);
    }

    public function user()
    {
        return Auth::user();
    }
}
