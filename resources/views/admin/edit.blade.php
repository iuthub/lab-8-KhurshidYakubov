@extends('layouts.admin')

@section('content')

@include('partials.errors')

 @foreach($posts as $post)
	            @if($edit_mode && $edit_post->id==$post->id)

<form method="post" action="{{route('edit_post')}}">
	@csrf
  <div class="form-group" >
    <label>Title</label>
     <textarea class="form-control"  name="body" rows="1">{{ $edit_post->title }}</textarea>
  </div>
  <div class="form-group">
  	 <label>Body</label>
 	 <textarea class="form-control"  name="body" rows="5">{{ $edit_post->body }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

   @endif
@endforeach
@endsection