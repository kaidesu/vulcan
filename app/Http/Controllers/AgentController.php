<?php

namespace Vulcan\Http\Controllers;

use Illuminate\Http\Request;
use Vulcan\Http\Requests\AgentRequest;
use Vulcan\Agent;

class AgentController extends Controller
{
    /**
     * Display a listing of all agents.
     *
     * @return Response
     */
    public function index()
    {
        $agents = Agent::all();

        return view('agents.index', compact('agents'));
    }

    /**
     * Show the form to create a new agent.
     *
     * @return Response
     */
    public function create()
    {
        return view('agents.create');
    }

    /**
     * Store a new agent.
     *
     * @param  CreateAgentRequest  $request
     * @return Response
     */
    public function store(AgentRequest $request)
    {
        Agent::create($request->all());

        return redirect('agents');
    }

    /**
     * Show the form for editing an existing agent.
     *
     * @param  integer  $id
     * @return Response
     */
    public function edit($id)
    {
        $agent = Agent::findOrFail($id);

        return view('agents.edit', compact('agent'));
    }

    /**
     * Update an existing agent.
     *
     * @param  integer  $id
     * @param  Request  $request
     * @return Response
     */
    public function update($id, AgentRequest $request)
    {
        $agent = Agent::findOrFail($id);

        $agent->update($request->all());

        return redirect('agents');
    }

    /**
     * Delete an existing agent :(
     *
     * @param  integer  $id
     * @return Response
     */
    public function delete($id)
    {
        Agent::destroy($id);

        return redirect('agents');
    }
}
