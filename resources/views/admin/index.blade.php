@extends('layouts.admin')

@section('content')
<a href="/admin/create"><div class="btn btn-success">New Post</div></a>

<div class="data-block">
@foreach($posts as $item)
<div class="col-md-12">
	  <p>{{$item->id }}. {{ $item->title }}</p>
    <a href="{{ route('delete', ['id'=>$item->id] ) }}"><div class="btn btn-danger">Delete</div></a>
    <a href="{{ route('edit', ['id'=>$item->id] ) }}"><div class="btn btn-primary">Edit</div></a>
	
</div>
@endforeach
</div>
@endsection