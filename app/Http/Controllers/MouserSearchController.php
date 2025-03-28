<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MouserSearchController extends Controller
{
    public function search(Request $request)
    {
        
        $query = $request->input('mouserPartNumber');
        $apiKey = env('MOUSER_API_KEY');
        

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'apiKey' => $apiKey,
        ])->post('https://api.mouser.com/api/v1/search/partnumber?', [
            'mouserPartNumber' => $query,
        ]);

        return $response->json();
    }
}