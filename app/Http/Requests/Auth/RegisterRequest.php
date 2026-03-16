<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'Username'  => 'required|string|max:25|unique:users,Username',
            'Nama'      => 'required|string|max:25',
            'Asal'      => 'required|string',
            'Alamat'    => 'required|string',
            'No_Telpon' => 'required|string|max:13',
            'role'      => 'required|in:admin,users',
            'Password'  => 'required|string|min:6|confirmed'
        ];
    }

    public function messages(): array
    {
        return [
            'Username.required' => 'Username wajib diisi.',
            'Username.unique'   => 'Username sudah digunakan.',
            'Nama.required'     => 'Nama wajib diisi.',
            'Asal.required'     => 'Asal wajib dipilih.',
            'Alamat.required'   => 'Alamat wajib diisi.',
            'No_Telpon.required'=> 'Nomor telepon wajib diisi.',
            'role.required'     => 'Role wajib diisi.',
            'role.in'           => 'Role hanya boleh admin atau users.',
            'Password.required' => 'Password wajib diisi.',
            'Password.min'      => 'Password minimal 6 karakter.',
            'Password.confirmed'=> 'Konfirmasi password tidak cocok.'
        ];
    }
}