extends('layouts.app')


@section('content')
<form action="{{route('users.edit')}}" method="POST">   
@csrf
<label> Email </label>
<input type="email" name="email">
<label> Email </label>
<input type="password" name="password">

<button type="submit" > submit </button>

</form>

@endsection