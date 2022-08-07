extends('layouts.app')
@section('content')
<form action="{{route('users.store')}}" method="POST">
@csrf
<label> Email </label>
<input type="email" name="email"><br>
<label> Email </label>
<input type="password" name="password"> <br>

<button type="submit" > submit </button>

</form>
@endsection