<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class HomeController extends Controller
{
    public function index()
    {
        $equipment = Equipment::all()->groupBy('category');
        return view('home', compact('equipment'));
    }
}
