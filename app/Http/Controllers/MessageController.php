<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        return Message::with(['user'])->orderBy('id', 'desc')->get()->toJson();
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);
        
        $message = $request->user()->messages()->create([
            'body' => $request->body
        ])->load('user');
        
        return $message;
    }
}
