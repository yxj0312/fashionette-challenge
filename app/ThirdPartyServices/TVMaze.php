<?php
namespace App\ThirdPartyServices;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Exceptions\InvalidRequestException;

/**
 * TVMaze implementation
 */
class TVMaze implements Service
{
    public function search(Request $request)
    {
        $q = $request->query('q');

        if ($q === null) {
           throw new InvalidRequestException();
        }

        $results = Http::get($this->endpoint($q))->json();

        if (empty($results)) {
            return response()->json(['message' => 'No matched!'], 200);
        }

        // use stripos to make non-case-sensitive
        $filterResults = function($show) use ($q){   
            return (stripos($show['show']['name'], $q) !== false);
        };

        $filtered = array_filter($results, $filterResults);

        return $filtered;
    }

    protected function endpoint($q): String
    {
        return "http://api.tvmaze.com/search/shows?q={$q}";
    }
}