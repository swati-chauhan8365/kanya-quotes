<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.kanye.rest/quotes/random/5');
        $quotes = $response->json();

        return response()->json($quotes);
    }

    public function show()
    {
        try {
            $response = Http::get('https://api.kanye.rest/quotes/random/5');
            $quotes = $response->json();

            return view('quotes', compact('quotes'));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch quotes'], 500);
        }
    }
}
