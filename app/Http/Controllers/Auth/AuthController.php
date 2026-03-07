<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        try {

            $user = User::create([
                'Username'  => $request->Username,
                'Nama'      => $request->Nama,
                'Asal'      => $request->Asal,
                'Alamat'    => $request->Alamat,
                'No_Telpon' => $request->No_Telpon,
                'Password'  => Hash::make($request->Password),
                'role'      => $request->role
            ]);

            // response berhasail
            return response()->json([
                'status'  => true,
                'code'    => 201,
                'message' => 'Registrasi berhasil',
                // 'data'    => [
                //     'Username'  => $user->Username,
                //     'Nama'      => $user->Nama,
                //     'Asal'      => $user->Asal,
                //     'Alamat'    => $user->Alamat,
                //     "role"      => $user->role,
                //     'dibuat_pada' => $user->created_at
                // ]
            ], 201);
        } catch (\Exception $e) {

            // response eror
            return response()->json([
                'status'  => false,
                'code'    => 500,
                'message' => 'Terjadi kesalahan pada server,Apakah kamu sdua regiter?',
            ], 500);
        }
    }

    public function login(LoginRequest $request)
    {
        try {

            $user = User::where('Username', $request->Username)->first();

            if (!$user) {
                return response()->json([
                    'status' => false,
                    'code' => 401,
                    'message' => 'Username tidak ditemukan'
                ], 401);
            }

            if (!Hash::check($request->Password, $user->Password)) {
                return response()->json([
                    'status' => false,
                    'code' => 401,
                    'message' => 'Password salah'
                ], 401);
            }

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'Login berhasil',
                'token_type' => 'Bearer',
                'token' => $token
            ], 200);
        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => 'Server error',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
