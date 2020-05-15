<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller

{
    public function index(){
       //
    }
 
    public function create(){
       return view('create.contact');
    }
 
    public function store(){
       $contact=new Contact();
       $contact->title=request('title');
       $contact->description=request('description');
       $contact->save();
       return redirect()->routes('contact');
 
    }
 
    public function show(contact $contact){
       $contacts=Contact::all();
       return view('hydro.contactedit', compact('contacts'));
    }
 
    public function edit($id){
       $contacts=Contact::find($id);
       return view('edit.contact', compact('contact'));
    }
    public function update($id){
       $contact=Contact::find($id);
       $contact->title=request('title');
       $contact->description=request('description');
       $contact->save();
       return redirect()->route('contact');
    }
    
    public function delete($id){
       Contact::find($id)->delete();
       return redirect()->back();
    }
 }
 