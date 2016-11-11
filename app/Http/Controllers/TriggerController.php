<?php

namespace Vulcan\Http\Controllers;

use Illuminate\Http\Request;
use Vulcan\Http\Requests\TriggerRequest;
use Vulcan\Trigger;
use Vulcan\Domain;

class TriggerController extends Controller
{
    /**
     * Display a listing of all triggers.
     *
     * @return Response
     */
    public function index($domainID)
    {
        $domain   = Domain::findOrFail($domainID);
        $triggers = $domain->triggers()->get();

        return view('triggers.index', compact('domain', 'triggers'));
    }

    /**
     * Show the form to create a new trigger.
     *
     * @return Response
     */
    public function create($domainID)
    {
        $domain   = Domain::findOrFail($domainID);

        return view('triggers.create', compact('domain'));
    }

    /**
     * Store a new trigger.
     *
     * @param  CreateTriggerRequest  $request
     * @return Response
     */
    public function store($domainID, TriggerRequest $request)
    {
        Domain::findOrFail($domainID)->triggers()->create($request->all());

        return redirect('triggers');
    }

    /**
     * Show the form for editing an existing trigger.
     *
     * @param  integer  $id
     * @return Response
     */
    public function edit($domainID, $id)
    {
        $domain  = Domain::findOrFail($domainID);
        $trigger = $domain->triggers()->findOrFail($id);

        return view('triggers.edit', compact('trigger'));
    }

    /**
     * Update an existing agent.
     *
     * @param  integer  $id
     * @param  TriggerRequest  $request
     * @return Response
     */
    public function update($domainID, $id, TriggerRequest $request)
    {
        $trigger = Trigger::findOrFail($id);

        $trigger->update($request->all());

        return redirect('triggers');
    }

    /**
     * Delete an existing trigger.
     *
     * @param  integer  $id
     * @return Response
     */
    public function delete($domainID, $id)
    {
        Trigger::destroy($id);

        return redirect('triggers');
    }
}
