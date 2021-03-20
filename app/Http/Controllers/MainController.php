<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view( 'main.index', compact('sliders'));
    }

    public function contacts()
    {
        return view('main.contacts');
    }
}
