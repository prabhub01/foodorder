@extends('layouts.app')

@section('content')
 <div class="container">
 <h3>Add Food Item</h3>
<form class="form-horizontal" action="">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Food Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Enter Category">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="price">Price:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="price" placeholder="Enter Price">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="select-category">Select Category:</label>
    <div class="col-sm-10">
      <select name="" id="select-category" class="form-control">
        <option value="">----Select----</option>
        <option value="BreakFast">Breakfast</option>
        <option value="Lunch">Lunch</option>
      </select>
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