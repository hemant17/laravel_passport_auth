<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
                'name' => 'required',
        ]);

        $user = $this->newUser($request->all());
        if (empty($user)) {
            return response([
                'message'=>'Faild to register'
            ], 401);
        } else {
            return response([
                'message'=>'Account Created Successfully. verification Email send to register email Id '
            ]);
        }
    }

    public function newUser($data)
    {
        $user_data = [
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=> Hash::make($data['password']),
            'role_id'=>2, // 2 id is for client or memeber 1 is stand for admin
        ];
        return  User::create($user_data);
    }
}
