<?php

namespace App\Http\Controllers;
use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller

{
    public function index(){
       //
    }
 
    public function create(){
       return view('create.Work');
    }
 
    public function store(){
       $work=new Work();
       $work->title=request('title');
       $work->description=request('description');
       $work->save();
       return redirect()->routes('work');
 
    }
 
    public function show(work $work){
       $works=Work::all();
       return view('hydro.workedit', compact('works'));
    }
 
    public function edit($id){
       $works=Work::find($id);
       return view('edit.work', compact('work'));
    }
    public function update($id){
       $work=Work::find($id);
       $work->title=request('title');
       $work->description=request('description');
       $work->save();
       return redirect()->route('work');
    }
    
    public function delete($id){
       Work::find($id)->delete();
       return redirect()->back();
    }
 }
 