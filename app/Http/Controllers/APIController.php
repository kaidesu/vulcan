<?php

namespace Vulcan\Http\Controllers;

use Illuminate\Http\Request;
use Vulcan\Contracts\ResponseRepository;

class APIController extends Controller
{
    /**
     * @var ResponseRepository
     */
    protected $response;

    /**
     * Create a new APIController instance.
     */
    public function __construct(ResponseRepository $response)
    {
        $this->response = $response;
    }

    /**
     * Fetch a response to the users message.
     *
     * @param  Request  $request
     * @return Response
     */
    public function respond(Request $request)
    {
        $response = $this->response->process($request->get('text'));

        return response()->json(['response' => $response]);
    }
}
