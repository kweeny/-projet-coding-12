<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller

{
    public function index(){
       //
    }
 
    public function create(){
       return view('create.event');
    }
 
    public function store(){
       $event=new Event();
       $event->title=request('title');
       $event->description=request('description');
       $event->save();
       return redirect()->routes('event');
 
    }
 
    public function show(event $event){
       $events=Contact::all();
       return view('hydro.eventedit', compact('events'));
    }
 
    public function edit($id){
       $events=Event::find($id);
       return view('edit.event', compact('event'));
    }
    public function update($id){
       $event=Event::find($id);
       $event->title=request('title');
       $event->description=request('description');
       $event->save();
       return redirect()->route('event');
    }
    
    public function delete($id){
       Event::find($id)->delete();
       return redirect()->back();
    }
 }
 