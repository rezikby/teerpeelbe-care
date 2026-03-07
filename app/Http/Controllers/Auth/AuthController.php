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
                'role'      => 'users'
            ]);

            // response berhasail
            return response()->json([
                'status'  => true,
                'code'    => 201,
                'message' => 'Registrasi berhasil',
                'data'    => [
                    'Username'  => $user->Username,
                    'Nama'      => $user->Nama,
                    'Asal'      => $user->Asal,
                    'Alamat'    => $user->Alamat,
                    'dibuat_pada' => $user->created_at
                ]
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
        // Cek user berdasarkan Username
        $user = User::where('Username', $request->Username)->first();

        // kalouser tidak ditemukan atau password salah
        if (!$user || !Hash::check($request->Password, $user->Password)) {
            return response()->json([
                'status'  => false,
                'code'    => 401,
                'message' => 'Username atau Password salah'
            ], 401);
        }

        // Jika login berhasil
        return response()->json([
            'status'  => true,
            'code'    => 200,
            'message' => 'Login berhasil',
            'data'    => [
                'Username'    => $user->Username,
                'Nama'        => $user->Nama,
                'Asal'        => $user->Asal,
                'Alamat'      => $user->Alamat,
                'No_Telpon'   => $user->No_Telpon,
                'dibuat_pada' => $user->created_at
            ]
        ], 200);
    }
}