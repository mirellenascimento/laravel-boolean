<footer>
  <div class="container">
      <div class="row header">
          <div class="col text-center">
            <ul>
              @foreach(config('main.routes') as $route)
              <li class={{ Route::currentRouteName() == $route['pathId'] ? 'active' : '' }}>
              <a href="{{route($route['pathId'], [], false)}}">{{$route['displayText']}}</a></li>
              @endforeach
            </ul>
          </div>
      </div>
  </div>
</footer>
