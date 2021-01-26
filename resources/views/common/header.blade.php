<nav>
  <h1>This is the header</h1>
  <img src="logo" alt="logo">
  <ul>
    @foreach(config('main.routes') as $route)
    <li class={{ Route::currentRouteName() == $route['pathId'] ? 'active' : '' }}>
    <a href="{{route($route['pathId'], [], false)}}">{{$route['displayText']}}</a></li>
    @endforeach
  </ul>
  <button type="button" name="button"><a href="/candidati">Candidati Ora</a></button>
</nav>
