<?php

namespace App\Http\Controllers;
use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function index(){
      //
   }

   public function create(){
      return view('create.about');
   }

   public function store(){
      $about=new About();
      $about->title=request('title');
      $about->description=request('description');
      $about->img_about=request('img_about');
      $about->save();
      return redirect()->route('about');

   }
   
   public function show(about $about){
      $abouts=About::all();
      return view('hydro.aboutedit', compact('abouts'));
   }

   public function edit($id){
      $abouts=About::find($id);
      return view('edit.about', compact('abouts'));
   }
   public function update($id){
      $about=About::find($id);
      $about->title=request('title');
      $about->description=request('description');
      $about->img_about=request('img_about');
      $about->save();
      return redirect()->route('about');
   }
   
   public function delete($id){
      About::find($id)->delete();
      return redirect()->back();
   }
}
 