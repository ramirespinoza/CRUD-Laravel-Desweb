@extends('layouts.home');

@section('container')

<a href="category/create" class="btn btn-primary">Create</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Description</th>
      <th scope="col">Options</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
    <tr>
      <th scope="row">{{$category->id_category}}</th>
      <td>{{$category->description}}</td>
      <td>
      <a href="/category/{{$category->id_category}}/edit" type="button" class="btn btn-success">Edit</a>
      <button type="button" class="btn btn-danger">Delete</button>
      </td> 
    </tr>
    @endforeach
  </tbody>
</table>
@endsection