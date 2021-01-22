@extends('layouts.app')

@section('content')
 <div class="container">

 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 <h3>Add Food Item</h3>
<form class="form-horizontal" action="{{ route('submit-fooditem') }}" method="post">
@csrf
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Food Name:</label>
    <div class="col-sm-10">
      <input type="text" name="item_name" class="form-control" id="name" placeholder="Enter Category">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="price">Price:</label>
    <div class="col-sm-10">
      <input type="number" name="price" class="form-control" id="price" placeholder="Enter Price">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="select-category">Select Category:</label>
    <div class="col-sm-10">
      <select name="foodcategory_id" id="select-category" class="form-control">
               @foreach ($data as $category_id)
                    <option value="{{ $category_id->id }}">{{ $category_id->category_name }}</option>
                @endforeach 
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