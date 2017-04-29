<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\ResponseRepository;

class ResponseController extends Controller
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
