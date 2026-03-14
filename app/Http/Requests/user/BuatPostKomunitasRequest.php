<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class BuatPostKomunitasRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'judul' => 'required|string|max:255',
            'isi_post' => 'required|string|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'Judul postingan wajib diisi',
            'isi_post.required' => 'Isi dukungan wajib diisi',
            'isi_post.max' => 'Isi postingan maksimal 1000 karakter'
        ];
    }
}