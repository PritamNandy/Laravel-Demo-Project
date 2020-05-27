<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    function index() {
        return view('quotes.index');
    }

    function showQuotes() {
        return view('quotes.show');
    }
}
