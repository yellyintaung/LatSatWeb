@extends('la.layouts.master')
@section('card_header')
<div class="card-header">
    <h3 class="card-title pt-2 text-uppercase">Category View</h3>
  </div>
@endsection
@section('content')
<div class="p-3">
    <div class="form-group">
        <label>Category Name:</label>
        <input type="text" class="form-control form-control-sm" value="{{ $category->category_name }}" readonly>
    </div>
    <div class="form-group">
        <label>Image :</label><br>
        <img src="/uploads/{{ $category->image}}" class="img-thumbnail" width="200" height="200">
    </div>
    <a href="/admin/category" class="btn btn-sm mr-2" style="background-color:#fff;border-color:red;color:black;"><i class="fas fa-angle-double-left"></i>&nbsp;Back</a>
    <div class="float-right">
       
        <a href="/admin/category/{{ $category->id }}/edit" class="btn btn-sm mr-2" style="background-color:#FFC107;color:black;width:4.5em;">Edit</a>
      
      
        <form action="/admin/category/{{ $category->id }}" method="post" class="d-inline">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
      
    </div>
</div>
@endsection