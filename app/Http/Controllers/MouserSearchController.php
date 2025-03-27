<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MouserSearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $apiKey = env('1ece26b0-451b-b4e9-6e272caa03f9'); // Almacena tu API key en el archivo .env

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'apiKey' => $apiKey,
        ])->get('https://api.mouser.com/api/v1/search/partnumber?mouserPartNumber=' . $query);

        return $response->json();
    }
}