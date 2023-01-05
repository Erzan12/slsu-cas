<nav class="navbar navbar-expand-lg navbar-wrapper  @guest sticky-top @endguest">
    <div class="@guest container @endguest @auth container-fluid @endauth">
      @guest
        <a class="navbar-brand" href="/">{{env('APP_NAME')}}</a>  
        @endguest
        
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-3 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          
          @guest
            <li class="nav-item">
              <a class="nav-link btn btn-outline-primary px-5 text-light" aria-current="page" href="{{route('login')}}">Login</a>
            </li>
          @endguest

          @auth
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{auth()->user()->displayName()}}
              </a>
              <ul class="dropdown-menu navbar-dropmenu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
              </ul>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>