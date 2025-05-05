<?php

namespace App\Http\Controllers;

use App\Events\MessageEvent;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);
        $data = Message::create([
            'content' => $request->message,
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
        ]);

        broadcast(new MessageEvent($data));

        return response()->json([
            'status' => 'success',
            'message' => 'Message sent successfully!',
            'data' => $data
        ]);
    }
}
