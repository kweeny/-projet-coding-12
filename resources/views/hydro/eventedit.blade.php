@extends('layout.admin')
@section('content')

<h1 class="text-center">event</h1>
<div class="text-center">
<a href="/eventedit/create" class="btn btn-warning">Create</a>
</div>
  <div class="container mt-5 text-center bg-light">
    <div class="row">
      <div class="col-1">
        <p>ID:</p>
      </div>
      <div class="col-1">
        <p>Title:</p>
      </div>
      <div class="col-3">
        <p>Description:</p>
      </div>
      <div class="col-3">
       <p>Action:</p>
      </div>
    </div>
  </div>

  @foreach ($abouts as $about)
  <div class="container mt-2">
    <div class="row">
      <div class="col-1">
        <div class="text-center">
        <p>{{$about->id}}</p>
        </div>
      </div>
      <div class="col-2">

        <p>{{$about->title}}</p>

      </div>
      <div class="col-3">

        <p>{{$event->description}}</p>

      </div>

      <div class="col-3">
       <a href="/eventedit/{{$event->id}}/edit" class="btn btn-success">Edit</a>
       <a href="/eventedit/{{$event->id}}/destroy" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>


  @endforeach

@endsection
