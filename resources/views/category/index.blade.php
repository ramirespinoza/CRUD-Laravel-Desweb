@extends('layouts.home');

@section('container')

<a href="category/create" class="btn btn-primary">Create</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
      <th scope="col">Category id</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->address}}</td>
      <td>{{$category->phone_number}}</td>
      <td>{{$category->created_at}}</td>
      <td>{{$category->updated_at}}</td>
      <td>{{$category->category_id}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection