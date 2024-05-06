<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');

        if ($search) {
            $events = Event::where('title', 'like', '%'. $search. '%')->get();
        } else {
            $events = Event::all();
        }

        return view('welcome', ['events' => $events, 'search' => $search]);
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $event = Event::firstOrCreate(
            ['title' => $request->title],
            [
                'city' => $request->city,
                'private' => $request->private,
                'descrition' => $request->descrition,
                'items' => $request->items,
                'date' => $request->date,
            ]
        );

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName(). strtotime("now")). ".".$extension;
            $request->image->move(public_path('/image'), $imageName);
            $event->image = $imageName;
            $event->save();
        }

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id) {
        $event = Event::findOrFail($id);
        return view('events.show', ['event' => $event]);
    }
}
