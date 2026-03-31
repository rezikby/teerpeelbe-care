<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TambahRumahSakitRequest extends FormRequest
{
    // Mengizinkan request digunakan
    public function authorize(): bool
    {
        return true;
    }

    // Aturan validasi data
    public function rules(): array
    {
        $isUpdate = $this->isMethod('put') || $this->isMethod('patch');

        return [
            'cover' => ($isUpdate ? 'nullable' : 'required') . '|image|mimes:jpg,jpeg,png,webp|max:2048',
            'nama_rumah_sakit' => 'required|string|max:255',
            'rating' => 'nullable|numeric|min:0|max:5',
            'alamat' => 'required|string',
            'nomor_kontak' => 'required|string|max:20',
            'kategori' => 'required|in:Darurat,Bedah,Kardiologi',
            'nomor_kamar' => 'required|integer',
            'status' => 'required|in:Buka,Tutup',
        ];
    }

    // Pesan error custom
    public function messages(): array
    {
        return [
            'cover.required' => 'Cover rumah sakit wajib diisi',
            'cover.image' => 'Cover harus berupa gambar',
            'cover.mimes' => 'Format gambar harus jpg, jpeg, png, atau webp',
            'cover.max' => 'Ukuran gambar maksimal 2MB',

            'nama_rumah_sakit.required' => 'Nama rumah sakit wajib diisi',
            'nama_rumah_sakit.max' => 'Nama rumah sakit maksimal 255 karakter',

            'rating.numeric' => 'Rating harus berupa angka',
            'rating.min' => 'Rating minimal 0',
            'rating.max' => 'Rating maksimal 5',

            'alamat.required' => 'Alamat rumah sakit wajib diisi',

            'nomor_kontak.required' => 'Nomor kontak wajib diisi',
            'nomor_kontak.max' => 'Nomor kontak maksimal 20 karakter',

            'kategori.required' => 'Kategori rumah sakit wajib dipilih',
            'kategori.in' => 'Kategori hanya boleh Darurat, Bedah, atau Kardiologi',

            'nomor_kamar.required' => 'Nomor kamar wajib diisi',
            'nomor_kamar.integer' => 'Nomor kamar harus berupa angka',

            'status.required' => 'Status wajib dipilih',
            'status.in' => 'Status hanya boleh Buka atau Tutup',
        ];
    }
}