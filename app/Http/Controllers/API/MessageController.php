<?php

namespace App\Http\Controllers\API;

use App\Message;
use Illuminate\Http\Request;
use App\Contracts\DialogInterface;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    protected $dialog;
    
    public function __construct(DialogInterface $dialog)
    {
        $this->dialog = $dialog;
    }
    
    public function index(Request $request)
    {
        return Message::with(['user'])->orderBy('id', 'desc')->get()->toJson();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);

        // $message = $request->user()->messages()->create([
        //     'body' => $request->body,
        // ]);

        return $this->dialog->output($request->body);
    }
}
