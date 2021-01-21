@extends('layouts.app')

@section('content')
 <div class="container">
 <h3>Add Food Category</h3>
<form class="form-horizontal" action="{{ route('submit') }}" method="post">
@csrf
  <div class="form-group">
    <label class="control-label col-sm-2" for="categ">Category Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="categ" name="category_name" placeholder="Enter Category">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <a class="btn btn-info" href="{{ route('home') }}"> Back</a>
      <button type="submit" class="btn btn-info">Submit</button>
    </div>
  </div>
</form>
</div>
@endsection