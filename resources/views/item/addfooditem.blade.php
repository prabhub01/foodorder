@extends('layouts.app')

@section('content')
 <div class="container">

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
    <div class="col-sm-10">
     <input type="text" name="item_name" class="form-control" id="name" placeholder="Enter Category">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-10">
      <input type="number" name="price" class="form-control" id="price" placeholder="Enter Price">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-10">
      <select name="foodcategory_id" id="select-category" class="form-control">
      <option value="">-----Select Category-----</option>
               @foreach ($datas as $category_id)
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

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div style="margin-top:5%;">
<h3>List of all Food Items</h3>
 
<!-- <select name="foodcategory_id" id="select-category">
      <option value="">Select to View Food Items</option> 
               @foreach ($datas as $category_id)
                    <option value="{{ $category_id->id }}">{{ $category_id->category_name }}</option>
                @endforeach 
</select><br> <br>

<select name="fooditem" id="select-item">               
</select><br> <br> -->

<table class="table table-sm" style="width:50%; margin-left:5%;">
  <thead>
    <tr>
      <th scope="col">I.D.</th>
      <th scope="col">Category Name</th>
      <th scope="col">Food Name</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($items as $val)
  <tr>
   <td value="{{ $val->id }}">{{ $val->id}} </td>

   <td value="{{ $val->category->category_name }}"> {{ $val->category->category_name }} </td>
    <!-- foodcategory is the function name of the relationship written in model -->

   <td value="{{ $val->item_name }}">{{ $val->item_name}}</td>
   <td value="{{ $val->price }}"> Rs. {{ $val->price}}</td>
   <td>
   <a href="{{ route('editfooditem',$val->id) }}"> <i class="fa fa-pencil" aria-hidden="true"></i> </a> &nbsp;|&nbsp;
          <a class="remove-item" data-id="{{ $val->id }}" data-action="{{ route('delete-fooditem', $val->id) }}">
          <i class="fa fa-trash" aria-hidden="true"></i></a>
   </td>

   </tr>
  @endforeach 
  </tbody>
</table>
</div>
</div>
@endsection