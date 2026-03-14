<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class BookingRumahSakitRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'rumah_sakit_id' => 'required|exists:rumah_sakits,id',
            'nama_pasien' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'nama_pasien.required' => 'Nama pasien wajib diisi',
            'tanggal.required' => 'Tanggal booking wajib diisi',
        ];
    }
}