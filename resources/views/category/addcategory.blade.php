@extends('layouts.app')

@section('content')
 <div class="container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
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
                      @if ($message = Session::get('success'))
                         <div class="alert alert-success">
                        <p>{{ $message }}</p>
                         </div>
                     @endif

<div style="margin-top:5%;">
<h3>List of all Categories</h3>
<table class="table table-sm" style="width:50%; margin-left:5%;">
  <thead>
    <tr>
      <th scope="col">I.D.</th>
      <th scope="col">Category Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $category)
    <tr>
      <td>{{ $category->id }}</td>
      <td>{{ $category->category_name }}</td>
       <td> 
          <a href="{{ route('editcategory',$category->id) }}"> <i class="fa fa-pencil" aria-hidden="true"></i> </a> &nbsp;|&nbsp;
          <a class="remove-category" data-id="{{ $category->id }}" data-action="{{ route('delete-category', $category->id) }}">
          <i class="fa fa-trash" aria-hidden="true"></i></a>
       </td> 
    </tr>
  @endforeach
  </tbody>
</table>
</div>
</div>
@endsection