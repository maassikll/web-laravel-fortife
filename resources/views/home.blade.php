<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Blinders</title>
</head>
<body>
<nav class="navbar navbar-expand-lg ">
@if(Route::has('login'))
<ul class="nav nav-tabs ms-auto ">
@auth
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{url('/home')}}">Home</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{Auth::user()->name}}</a>
    <ul class="dropdown-menu ">
      <li><a class="dropdown-item" href="#">Profil</a></li>
      <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>

    </ul>
  </li>
  <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none">
                @csrf
            </form>
  @else
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
  </li>
  @if(Route::has('register'))
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{route('register')}}">Register</a>
  </li>
  @endif
        @endif  

</ul>
@endif 
</nav>
<div class="container">
  <a href="{{url('/info')}}" class="btn btn-success btn-sm" title="add new user">
    <i class="fa fa-plis" aria-hidden="true">Add New</i>
  </a>
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">created_at</th>
      <th scope="col">roles</th>
      <th scope="col">verification</th>
    </tr>
  </thead>
  @foreach($infos as $info)
  <tbody>
    <tr>
      <th scope="row">{{$info->id}}</th>
      <td>{{$info->name}}</td>
      <td>{{$info->email}}</td>
      <td>{{$info->created_at}}</td>
      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">    
      @if ( $info->roles->count()>0 )
                          @foreach($info->roles as $role)
                          {{ $role->name }} <br>
                          @endforeach
                        @else
                            Not defined
                        @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">

@if (isset($info->email_verified_at))
<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
    Verified
@else
<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
    Not Verified
@endif
</span>
</td>
    </tr>
  </tbody>

  @endforeach
  {{$infos->links()}}
 
</table>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>


</body>
</html>


