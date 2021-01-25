@extends('layouts.app')

@section('content')
<div class="container">
 <h3>Edit Food Items</h3>
 <form class="form-horizontal" action="{{ route('updatefooditem',$details->id) }}" method="post">
@csrf
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Food Name:</label>
    <div class="col-sm-10">
      <input type="text" name="item_name" class="form-control" id="name" value="{{ $details->item_name }}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="price">Price:</label>
    <div class="col-sm-10">
      <input type="number" name="price" class="form-control" id="price" value="{{ $details->price }}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="select-category">Select Category:</label>
    <div class="col-sm-10">
      <select name="foodcategory_id" id="select-category" class="form-control">
      <option value="{{ $details->category->id }}"> {{ $details->category->category_name }} </option>
      <option disabled>______________</option>
      @foreach ($val as $category_id)
                    <option value="{{ $category_id->id }}">{{ $category_id->category_name }}</option>
                @endforeach
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <a class="btn btn-info" href="{{ route('home') }}"> Back</a>
      <button type="submit" class="btn btn-info">Update</button>
    </div>
  </div>
</form>
</div>
@endsection