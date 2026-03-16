<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller; // ini penting
use App\Http\Requests\User\BuatPostKomunitasRequest;
use App\Models\PostKomunitas;

class KomunitasController extends Controller
{
    public function store(BuatPostKomunitasRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();

        PostKomunitas::create($data);

        return back()->with('success','Postingan berhasil dibuat');
    }
}