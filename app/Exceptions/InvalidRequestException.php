<?php

namespace App\Exceptions;

use Exception;

class InvalidRequestException extends Exception
{
    public function render()
    {
        return response(['error' => 'Invalid request!'], 400);
    }
}
