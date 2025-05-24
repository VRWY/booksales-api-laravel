<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public function register(Request $request){
        // 1. setup validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'password' => 'required|min:8'
        ]);

        // 2. cek validaror
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }

        // 3. create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // 4. cek sussces
        if ($user){
            return response()->json([
                'success' => true,
                'message' => 'User created successfuly',
                'data' => $user
            ], 201);
        }

        // 5. cek failed
        return response()->json([
            'success' => false,
            'message' => 'User created faild'
        ], 409);

    }
    public function login(Request $request){
        // 1. Setup validator
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:8'
        ]);

        // 2. cek validator
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }

        // 3. get kredensial dari request
        $credentials = $request->only('email', 'password');

        // 4. cek isFailed
        if (!$token =auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Email or Password failed!'
            ], 401);
        }

        // 5. cek isSuccess
        return response()->json([
            'success' => true,
            'message' => 'Login successfuly',
            'user' => auth()->guard('api')->user(),
            'token' => $token
        ], 200);
    }

    public function logout(Request $request) {
        // try catch
        // 1. Invalidate token
        // 2. cek isSuccess

        // catch
        //1. cek isFaild
        try{
            JWTAuth::invalidate(JWTAuth::getToken());

            return response()->json([
                'success' => true,
                'message' => 'Login successfuly',
            ], 200);
        }catch (jwtEcception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Login Failed!'
            ], 500);
        }
    }
}
