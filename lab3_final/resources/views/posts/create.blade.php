@extends('layouts.app')
@section('navbar')
@section('title', 'Create post page')
@section('post_create')
<head>

  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

    <form action="{{route('posts.store')}}" method="Post">
        @csrf
        <h1>Create Post</h1>
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" ></input>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" name="body" class="form-control" id="exampleInputPassword1" >
  </div> 
  <div class="mb-3">
   <label for="enabled" class="form-label">enabled</label>
       <input type="text" class="form-control" name="enabled">
           </div>
   
  <button type="submit" class="btn btn-primary" >Submit</button>
  </form></form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
@endsection
