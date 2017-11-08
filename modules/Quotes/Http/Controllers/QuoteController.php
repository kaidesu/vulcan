<?php

namespace Modules\Quotes\Http\Controllers;

use Modules\Quotes\Quote;
use App\Http\Controllers\Controller;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::get();
        
        return view('quotes::index', compact('quotes'));
    }
}
