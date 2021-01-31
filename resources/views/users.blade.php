@extends('layouts.main')

@section('content')
<h1>This is the Users page</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


<div class="cds-container container">


  @foreach($dataUsers as $user)
    <div class="cd">
      <img src="{{$user->image}}" alt="User Image">
      <h3>{{$user->first_name}} {{$user->last_name}}</h3>
      <span class="author">{{$user->gender}}</span>
      <span class="year">{{$user->email}}</span>
      <a href="{{route(''show_user'')}}">View details</a>
    </div>
  @endforeach
</div>


@endsection
