<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThirdPartyServices\TVMaze;

class ApiController extends Controller
{
    public function search(Request $request)
    {
        return (new TVMaze())->search($request);
    }
}
