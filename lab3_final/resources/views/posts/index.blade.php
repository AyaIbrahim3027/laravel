@extends("layouts.app")
@section('navbar')
@section('title', 'List posts page')
@section('post_content')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>   
            <th>{{$post['id']}}</th>
            <td> <a  hraf="{{ route('posts.show', $post['id'] )}}" > {{$post['title']}} </a> </td>
            <td>{{$post['body']}}</td>
            
            <td>
                <form action="{{route('posts.destroy',$post['id'] )}}" method="POST">
                <a class="btn btn-primary" href="{{route('posts.edit', $post['id'] )}}">Edit</a>
                    @method('DELETE')
                    @csrf
                <button type="submit" class="btn btn-danger" > Delete </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

@endsection