<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = "https://api.api-ninjas.com/v1/cats?grooming=4";
        $apiKey = "DA3r2ia8jnxRfb9nDdrTWogc4WX4I7RKYpxXNcLl"; // Replace "YOUR_API_KEY" with your actual API key
    
        try {
            $response = Http::withHeaders([
                'x-api-key' => $apiKey,
            ])->get($url);
    
            $catData = $response->json();
            // Assuming you want to return the cat data to a view
            return view('cat.index', ['cats' => $catData]);
        } catch (\Exception $e) {
            // Handle the exception
            return response()->json(['error' => 'Failed to fetch cat data.'], 500);
        }
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cat $cat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cat $cat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $cat)
    {
        //
    }
}
