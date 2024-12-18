<?php

namespace App\Http\Controllers;

use App\Models\FloodLocation;
use Illuminate\Http\Request;

class FloodLocationController extends Controller
{
    public function index()
    {
        $floodLocations = FloodLocation::with('cityDetails')->get();

        return view('test', compact('floodLocations'));
    }
}
