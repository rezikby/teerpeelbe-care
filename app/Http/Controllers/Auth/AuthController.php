<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\Auth\RegisterRequest;

class AuthController extends Controller
{

    // tampilkan halaman register
    public function showRegister()
    {
        return view('register');
    }

    // tampilkan halaman login
    public function showLogin()
    {
        return view('login');
    }

    // proses register
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();

        User::create([
            'Username'  => $data['Username'],
            'Nama'      => $data['Nama'],
            'Asal'      => $data['Asal'],
            'Alamat'    => $data['Alamat'],
            'No_Telpon' => $data['No_Telpon'],
            'role'      => $data['role'],
            'Password'  => Hash::make($data['Password']),
        ]);

        return redirect('/login')->with('success','Registrasi berhasil');
    }

    // proses login
    public function login(Request $request)
    {
        $request->validate([
            'Username' => 'required|string',
            'Password' => 'required|string'
        ]);

        $user = User::where('Username',$request->Username)->first();

        if($user && Hash::check($request->Password,$user->Password)){
            Auth::login($user);
            $request->session()->regenerate();

            return redirect('/home');
        }

        return back()->with('error','Username atau Password salah');
    }

    // logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

}