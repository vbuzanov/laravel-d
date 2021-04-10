<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view( 'main.index', compact('sliders'));
    }

    public function news()
    {
        $news = News::paginate(10);
        // dd($news);
        return view('main.news', compact('news'));
    }

    public function newsnext($slug)
    {
        $newsnext = News::where('slug', $slug)->firstOrFail();
        return view('main.newsnext', compact('newsnext'));
    }

    public function guests()
    {
        return view('main.guests');
    }

    public function contacts()
    {
        return view('main.contacts');
    }

    public function guests_pr()
    {
        return view('main.guests.pr');
    }

    public function guests_info()
    {
        return view('main.guests.info');
    }

    public function guests_norm()
    {
        return view('main.guests.norm');
    }

    public function guests_doc()
    {
        return view('main.guests.doc');
    }

    public function guests_sup()
    {
        return view('main.guests.sup');
    }

    public function guests_others()
    {
        return view('main.guests.others');
    }
}
