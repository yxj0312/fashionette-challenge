<?php

namespace App\ThirdPartyServices;

use Illuminate\Http\Request;

/**
 * Create an interface for all third party service
 * We could use this interface as an adapter for other third party service
 */
interface Service
{
    public function search(Request $request);
}