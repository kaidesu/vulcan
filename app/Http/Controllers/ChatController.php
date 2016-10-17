<?php

namespace Vulcan\Http\Controllers;

use Illuminate\Http\Request;
use Vulcan\Http\Requests;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat.index');
    }
}
