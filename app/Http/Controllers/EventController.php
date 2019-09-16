<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::where('date', '>=', Carbon::now())
            ->orderBy('date', 'ASC')
            ->get();
        return view('tour.index', compact('events'));
    }


    public function show(Event $event)
    {
        return view('tour.show', compact('event'));
    }

}
