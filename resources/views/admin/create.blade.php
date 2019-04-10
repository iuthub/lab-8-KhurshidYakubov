@extends('layouts.admin')

@section('content')

@include('partials.errors')

<form method="post" action="{{url('post')}}">
	@csrf
  <div class="form-group" >
    <label>Title</label>
    <input type="text"  name="title" class="form-control" placeholder="">
  </div>
  <div class="form-group">
  	 <label>Body</label>
 	 <textarea class="form-control"  name="body" rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection