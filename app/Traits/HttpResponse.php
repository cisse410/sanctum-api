<?php

namespace App\Traits;

trait HttpResponse
{
    protected function success($data, $message = null, $code = 200)
    {
        return response()->json([
            'status' => 'Request Successful',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function error($data, $message = null, $code = 200)
    {
        return response()->json([
            'status' => 'Une erreur est survenue !!',
            'message' => $message,
            'data' => $data
        ], $code);
    }
}