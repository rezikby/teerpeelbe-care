<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // FORM HALAMAN

    // Tampilkan halaman register
    public function showRegister()
    {
        return view('register'); // pastikan resources/views/register.blade.php ada
    }

    // Tampilkan halaman login
    public function showLogin()
    {
        return view('login'); 
    }



    // Proses register
    public function register(Request $request)
{
   $request->validate([
    'Username'   => 'required|string|unique:users,Username|max:25',
    'Nama'       => 'required|string|max:25',
    'Asal'       => 'required|string',
    'Alamat'     => 'required|string',
    'No_Telpon'  => 'required|string|max:13',
    'Password'   => 'required|string|min:6|confirmed',
], [
    'Username.required'  => 'Username wajib diisi.',
    'Username.unique'    => 'Username sudah digunakan, silakan pilih yang lain.',
    'Username.max'       => 'Username maksimal 25 karakter.',
    
    'Nama.required'      => 'Nama wajib diisi.',
    'Nama.max'           => 'Nama maksimal 25 karakter.',
    
    'Asal.required'      => 'Asal wajib dipilih.',
    
    'Alamat.required'    => 'Alamat wajib diisi.',
    
    'No_Telpon.required' => 'No Telpon wajib diisi.',
    'No_Telpon.max'      => 'No Telpon maksimal 13 karakter.',
    
    'Password.required'  => 'Password wajib diisi.',
    'Password.min'       => 'Password minimal 6 karakter.',
    'Password.confirmed' => 'Konfirmasi password tidak sama.',
]);

    // redirect ke halaman login dengan pesan sukses
    return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login');
}
    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'Username' => 'required|string',
            'Password' => 'required|string',
        ]);

        $user = User::where('Username', $request->Username)->first();

        if ($user && Hash::check($request->Password, $user->Password)) {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect('/home');
        }

        return back()->with('error','Login gagal, cek username & password');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}