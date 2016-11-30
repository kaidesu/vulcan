<?php

namespace Vulcan\Http\Controllers;

use Illuminate\Http\Request;
use Vulcan\Http\Requests\ResponseRequest;
use Vulcan\Listener;
use Vulcan\Response;

class ResponseController extends Controller
{
    /**
     * Display a listing of all listeners.
     *
     * @return Response
     */
    public function index($domainID, $listenerID)
    {
        $listener  = Listener::findOrFail($listenerID);
        $responses = $listener->responses()->get();

        return view('responses.index', compact('listener', 'responses'));
    }

    /**
     * Show the form to create a new listener.
     *
     * @return Response
     */
    public function create($domainID, $listenerID)
    {
        $listener = Listener::findOrFail($listenerID);

        return view('responses.create', compact('listener'));
    }

    /**
     * Store a new listener.
     *
     * @param  CreateListenerRequest  $request
     * @return Response
     */
    public function store($domainID, $listenerID, ResponseRequest $request)
    {
        Listener::findOrFail($listenerID)->responses()->create($request->all());

        return redirect()->route('responses.index', ['domainID' => $domainID, 'listenerID' => $listenerID]);
    }

    /**
     * Show the form for editing an existing listener.
     *
     * @param  integer  $id
     * @return Response
     */
    public function edit($domainID, $listenerID, $id)
    {
        $response = Response::findOrFail($id);

        return view('responses.edit', compact('response'));
    }

    /**
     * Update an existing agent.
     *
     * @param  integer  $id
     * @param  ListenerRequest  $request
     * @return Response
     */
    public function update($domainID, $listenerID, $id, ListenerRequest $request)
    {
        $response = Response::findOrFail($id);

        $response->update($request->all());

        return redirect()->route('responses.index', ['domainID' => $domainID, 'listenerID' => $listenerID]);
    }

    /**
     * Delete an existing listener.
     *
     * @param  integer  $id
     * @return Response
     */
    public function delete($domainID, $listenerID, $id)
    {
        Response::destroy($id);

        return redirect()->route('responses.index', ['domainID' => $domainID, 'listenerID' => $listenerID]);
    }
}
