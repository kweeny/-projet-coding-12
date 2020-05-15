@extends('layout.admin')
@section('content')

<h1 class="text-center">contact</h1>
<div class="text-center">
<a href="/contactedit/create" class="btn btn-warning">Create</a>
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

  @foreach ($contacts as $contact)
  <div class="container mt-2">
    <div class="row">
      <div class="col-1">
        <div class="text-center">
        <p>{{$contact->id}}</p>
        </div>
      </div>
      <div class="col-2">

        <p>{{$contact->secondtitle}}</p>

      </div>
      <div class="col-3">

        <p>{{$contact->seconddescription}}</p>

      </div>

      <div class="col-3">
       <a href="/contactedit/{{$contact->id}}/edit" class="btn btn-success">Edit</a>
       <a href="/contactedit/{{$contact->id}}/destroy" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>


  @endforeach

@endsection
