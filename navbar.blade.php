<html>
<head> 
<style>
  .nv{
    height: 80px;
    width:100%;
  }
</style>
</head>
<body>

<nav class="nv">
<ul >
<li> <a href="/">Home </a> </li> 
<li class="nv"> <a href="#">Users </a>
    <ul><a href="{{route('users.index'}}"  active="active" >List </a></ul>
    <ul><a href="{{route('users.create'}}"> New User</a></ul>
</li> 
</ul>
</nav>

</body>
</html>