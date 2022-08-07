extends('layouts.app')

@section('content')
<table>

<thead>
<tr>
<th> ID </th>
<th> Name </th>
<th> Email </th>
<th> Actions </th>
</tr>
</thead>
<tbody>
 @foreach($users as $user)
 <tr>
 <td> {{$user['id']}}</td>
 <td> {{$user['name']}}</td>
 <td> {{$user['email']}}</td>

 <td> 
    <a href="{{ route('users.edit',['id'=>$user['id']]) }}">Edit</a>
    <a href="{{ route('users.show',['id'=>$user['id']]) }}">Delete</a>
 </td>
</tr>

@endforeach
</tbody>


</table>

@endsection