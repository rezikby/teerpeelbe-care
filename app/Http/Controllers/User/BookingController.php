<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Http\Requests\User\BookingRumahSakitRequest;

class BookingController extends Controller
{
    public function store(BookingRumahSakitRequest $request)
    {
        $data = $request->validated();

        Booking::create($data);

        return back()->with('success','Booking berhasil');
    }
}