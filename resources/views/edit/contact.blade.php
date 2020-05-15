@extends('layout.admin')
@section('content')

<div class="container d-flex justify-content-center">
  <div class="col-5">
    <div class="container">
      <form method="post" action="/contactedit/{{$contacts->id}}/update">
        @csrf

        <div class="form-group">
          <label class="mt-5">Second Title</label>
          <input type="text" value="{{$contacts->secondtitle}}" name="secondtitle" class="form-control" id="" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="mt-5">Second Description</label>
          <input type="text" name='seconddescription' value=" {{$contacts->seconddescription}} " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection 