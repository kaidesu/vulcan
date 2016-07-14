<?php

namespace Vulcan\Http\Controllers;

use Rivescript;
use Illuminate\Http\Request;
use Vulcan\Http\Requests;

class APIController extends Controller
{
    /**
     * Create a new APIController instance.
     */
    public function __construct()
    {
        Rivescript::loadFile(storage_path('rivescript/test.rive'));
    }

    /**
     * Fetch a response to the users message.
     *
     * @param  Request  $request
     * @return Response
     */
    public function respond(Request $request)
    {
        $response = Rivescript::reply(null, $request->get('text'));

        return response()->json(['response' => $response]);
    }
}
