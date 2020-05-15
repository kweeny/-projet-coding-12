<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Event;
use App\Work;
use App\Contact;


class AllController extends Controller
{
    public function show(){
        $abouts = About::all();
        $events = Event::all();
        $works = Work::all();
        $contacts = Contact::all();


        return view('/index', compact('abouts', 'events', 'works', 'contacts',));

    }
}
