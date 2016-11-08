<?php

namespace Vulcan\Http\Controllers;

use Illuminate\Http\Request;
use Vulcan\Http\Requests\TriggerRequest;
use Vulcan\Trigger;

class TriggerController extends Controller
{
    /**
     * Display a listing of all triggers.
     *
     * @return Response
     */
    public function index()
    {
        $triggers = Trigger::all();

        return view('triggers.index', compact('triggers'));
    }

    /**
     * Show the form to create a new trigger.
     *
     * @return Response
     */
    public function create()
    {
        return view('triggers.create');
    }

    /**
     * Store a new trigger.
     *
     * @param  CreateTriggerRequest  $request
     * @return Response
     */
    public function store(TriggerRequest $request)
    {
        Trigger::create($request->all());

        return redirect('triggers');
    }

    /**
     * Show the form for editing an existing trigger.
     *
     * @param  integer  $id
     * @return Response
     */
    public function edit($id)
    {
        $trigger = Trigger::findOrFail($id);

        return view('triggers.edit', compact('trigger'));
    }

    /**
     * Update an existing agent.
     *
     * @param  integer  $id
     * @param  TriggerRequest  $request
     * @return Response
     */
    public function update($id, TriggerRequest $request)
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
    public function delete($id)
    {
        Trigger::destroy($id);

        return redirect('triggers');
    }
}
