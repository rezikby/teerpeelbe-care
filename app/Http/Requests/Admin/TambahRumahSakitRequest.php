<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class TambahRumahSakitRequest extends FormRequest
{
    // mengizinkan request digunakan
    public function authorize(): bool
    {
        return true;
    }

    // aturan validasi data
    public function rules(): array
    {
        return [
            'cover' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nama_rumah_sakit' => 'required|string|max:255',
            'rating' => 'nullable|numeric',
            'alamat' => 'required|string',
            'nomor_kontak' => 'required|string|max:20',
            'kategori' => 'required|in:Darurat,Bedah,Kardiologi',
            'nomor_kamar' => 'required|integer',
            'status' => 'required|in:Buka,Tutup',
        ];
    }

    public function messages()
    {
        return [
            'cover.required' => 'Cover rumah sakit wajib diisi',
            'cover.image' => 'Cover harus berupa gambar',
            'cover.mimes' => 'Format gambar harus jpg, jpeg, atau png',

            'nama_rumah_sakit.required' => 'Nama rumah sakit wajib diisi',

            'rating.numeric' => 'Rating harus berupa angka',

            'alamat.required' => 'Alamat rumah sakit wajib diisi',

            'nomor_kontak.required' => 'Nomor kontak wajib diisi',

            'kategori.required' => 'Kategori rumah sakit wajib dipilih',
            'kategori.in' => 'Kategori hanya Darurat, Bedah, atau Kardiologi',

            'status.required' => 'Status wajib dipilih',
            'status.in' => 'Status hanya boleh Buka atau Tutup',

            'nomorkamar.required' => 'Nomor kamar wajib di isi',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422)
        );
    }
}
