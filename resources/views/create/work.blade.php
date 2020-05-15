@extends('layout.admin')
@section('content')

<div class="container d-flex justify-content-center">
  <div class="col-5">
    <div class="container">
      <form method="post" action="/workedit/store">
        @csrf

        <div class="form-group">
          <label class="mt-5">Title</label>
          <input type="text" name="title" class="form-control" id="" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="mt-5">Description</label>
          <input type="text" name='description' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>
        
      </form>
    </div>
  </div>
</div>
@endsection