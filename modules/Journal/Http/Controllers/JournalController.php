<?php

namespace Modules\Journal\Http\Controllers;

use Modules\Journal\Journal;
use App\Http\Controllers\Controller;

class JournalController extends Controller
{
    public function index()
    {
        $journals = Journal::get();
        
        return view('journal::index', compact('journals'));
    }
}
