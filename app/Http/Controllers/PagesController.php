<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PagesController extends Controller
{
    public function home()
    {
        $tour = Event::where('date', '>=', Carbon::now())
                    ->orderBy('date', 'ASC')
                    ->take(5)
                    ->get();
        return view('pages.home', compact('tour'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
