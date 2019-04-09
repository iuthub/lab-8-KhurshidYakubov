@extends('layouts.admin')

@section('content')
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="	">
  </div>
  <div class="form-group">
  	 <label for="exampleInputEmail1">Body</label>
 	 <textarea class="form-control" rows="5" id="comment"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection