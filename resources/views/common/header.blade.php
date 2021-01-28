<header>
  <div class="container">
      <div class="row header">
          <div class="col-lg-2">
              <a href="/"><img src="img/logo.png" alt="logo"></a>
          </div>
          <div class="col-lg-10 text-right">
            <ul>
              @foreach(config('main.routes') as $route)
              <li class={{ Route::currentRouteName() == $route['pathId'] ? 'active' : '' }}>
              <a href="{{route($route['pathId'], [], false)}}">{{$route['displayText']}}</a></li>
              @endforeach
              <li><a class="btn btn-outline-success" href="/candidati">Candidati ora</a></li>
              <li><a class="btn btn-success" href="/users">Users</a></li>

            </ul>
          </div>
      </div>
  </div>
</header>
