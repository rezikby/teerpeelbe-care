<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{

public function index()
{
    $messages = Message::latest()->get();
    return view('admin.chat', compact('messages'));
}

public function reply(Request $request, $id)
{
    $message = Message::findOrFail($id);

    $message->reply = $request->reply;
    $message->save();

    return redirect()->back();
}

    public function store(Request $request){

    $request->validate([
        'pesan' => 'required|string|max:1000'
    ]);


    Message::create([
        'user_id' => auth()->id(),
        'message' => $request->pesan
    ]);
    
    $messages = Message::latest()->get();
    return view('admin.chat', compact('messages')); 

    return response()->json([
        'status' => 'ok',
        'message' => 'Pesan terkirim'
    ]);
    return response()->json(['status'=>'ok']);
}


}
