<?php

namespace Vulcan\Http\Controllers;

use Illuminate\Http\Request;
use Vulcan\Http\Requests\DomainRequest;
use Vulcan\Domain;

class DomainController extends Controller
{
    /**
     * Display a listing of all domains.
     *
     * @return Response
     */
    public function index()
    {
        $domains = Domain::all();

        return view('domains.index', compact('domains'));
    }

    /**
     * Show the form to create a new domain.
     *
     * @return Response
     */
    public function create()
    {
        return view('domains.create');
    }

    /**
     * Store a new domain.
     *
     * @param  CreateDomainRequest  $request
     * @return Response
     */
    public function store(DomainRequest $request)
    {
        Domain::create($request->all());

        return redirect('domains');
    }

    /**
     * Show the form for editing an existing domain.
     *
     * @param  integer  $id
     * @return Response
     */
    public function edit($id)
    {
        $domain = Domain::findOrFail($id);

        return view('domains.edit', compact('domain'));
    }

    /**
     * Update an existing agent.
     *
     * @param  integer  $id
     * @param  DomainRequest  $request
     * @return Response
     */
    public function update($id, DomainRequest $request)
    {
        $domain = Domain::findOrFail($id);

        $domain->update($request->all());

        return redirect('domains');
    }

    /**
     * Delete an existing domain.
     *
     * @param  integer  $id
     * @return Response
     */
    public function delete($id)
    {
        Domain::destroy($id);

        return redirect('domains');
    }
}
