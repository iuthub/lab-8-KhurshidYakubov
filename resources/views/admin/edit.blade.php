@extends('layouts.admin')

@section('content')

@include('partials.errors')


<form method="post" action="{{ route('update', ['id'=>$article->id]) }}">
	@csrf
  <div class="form-group" >
    <label>Title</label>
     <textarea class="form-control"  name="title" rows="1">{{ $article->title }}</textarea>
  </div>
  <div class="form-group">
  	 <label>Body</label>
 	 <textarea class="form-control"  name="body" rows="5">{{ $article->body }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection