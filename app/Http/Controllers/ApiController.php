<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function search(Request $request)
    {
        $q = $request->query('q');

        if ($q === null) {
            return response()->json(['error' => 'Invalid request!'],400);
        }

        return $results = Http::get("http://api.tvmaze.com/search/shows?q={$q}")->json();
    }
}
