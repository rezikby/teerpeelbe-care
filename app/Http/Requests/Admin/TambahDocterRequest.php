<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TambahDocterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         return [
            'foto_profile' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            
            'nama' => 'required|string|max:255',

            'rating' => 'nullable|numeric',
            'pengalaman' => 'required|string',
            'jadwal' => 'required|string|max:20',

            'spesialis' => 'required|in:Cardiologist(spesialis jantung dan pembuluh darah)', 
            'Pediatrician(spesialis anak)', 'Dermatologist( spesialis kulit dan kelamin (Sp.KK/Sp.DVE)',

            'harga' => 'required|integer',
        ];
    }
}
