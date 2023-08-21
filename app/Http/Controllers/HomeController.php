<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $events_two = Event::latest()->limit(2);
        $events = Event::all();
        $items = Item::all();
        $user = User::all()->random(10);

        return view('index', [
            'events_two' => $events_two,
            'events' => $events,
            'items' => $items,
            'user' => $user
        ]);
}
    public function store(){}
}
