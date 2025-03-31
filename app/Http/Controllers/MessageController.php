<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;

class MessageController extends Controller
{
    public function index()
    {
        return view('message');
    }

    public function store()
    {
        event(new ChatEvent(request()->input('message')));
    }
}
