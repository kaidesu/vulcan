<?php

namespace Vulcan\Http\Controllers;

use Illuminate\Http\Request;
use Vulcan\Http\Requests\ListenerRequest;
use Vulcan\Listener;
use Vulcan\Domain;

class ListenerController extends Controller
{
    /**
     * Display a listing of all listeners.
     *
     * @return Response
     */
    public function index($domainID)
    {
        $domain    = Domain::findOrFail($domainID);
        $listeners = $domain->listeners()->get();

        return view('listeners.index', compact('domain', 'listeners'));
    }

    /**
     * Show the form to create a new listener.
     *
     * @return Response
     */
    public function create($domainID)
    {
        $domain = Domain::findOrFail($domainID);

        return view('listeners.create', compact('domain'));
    }

    /**
     * Store a new listener.
     *
     * @param  CreateListenerRequest  $request
     * @return Response
     */
    public function store($domainID, ListenerRequest $request)
    {
        Domain::findOrFail($domainID)->listeners()->create($request->all());

        return redirect()->route('listeners.index', ['domainID' => $domainID]);
    }

    /**
     * Show the form for editing an existing listener.
     *
     * @param  integer  $id
     * @return Response
     */
    public function edit($domainID, $id)
    {
        $domain   = Domain::findOrFail($domainID);
        $listener = $domain->listeners()->findOrFail($id);

        return view('listeners.edit', compact('listener'));
    }

    /**
     * Update an existing agent.
     *
     * @param  integer  $id
     * @param  ListenerRequest  $request
     * @return Response
     */
    public function update($domainID, $id, ListenerRequest $request)
    {
        $listener = Listener::findOrFail($id);

        $listener->update($request->all());

        return redirect()->route('listeners.index', ['domainID' => $domainID]);
    }

    /**
     * Delete an existing listener.
     *
     * @param  integer  $id
     * @return Response
     */
    public function delete($domainID, $id)
    {
        Listener::destroy($id);

        return redirect()->route('listeners.index', ['domainID' => $domainID]);
    }
}
