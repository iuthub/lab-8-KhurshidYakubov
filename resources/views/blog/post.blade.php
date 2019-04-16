@extends('layouts.master')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <p class="quote">{{$article->title}}</p>
            <span>{{$article->body}}</span>
        </div>
    </div>

@endsection