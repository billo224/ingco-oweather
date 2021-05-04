<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <a class="navbar-brand" href="#">IngCo - OpenWeather</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            @if (Route::has('login'))
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
              </ul>
            @endif
        </div>
      </nav>
</div>