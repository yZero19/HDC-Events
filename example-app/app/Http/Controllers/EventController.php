<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Corrigido o nome da classe para "Event" com a primeira letra maiúscula

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all(); // Corrigido o nome da classe para "Event"

        return view('welcome', ['events' => $events]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Event; // Corrigido o nome da classe para "Event"

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->descrition = $request->descrition;

        $event->save();

        return redirect('/');
    }
}
