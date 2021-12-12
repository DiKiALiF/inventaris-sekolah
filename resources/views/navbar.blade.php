<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Home
                </a>
            </div>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <div class="nav-item">
      <a class="dropdown-item" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" role = "button">
      Logout <i class = "fas fa-sign-out-alt"></i>
</a>
      <form id ="logout-form" action="{{ route ('logout') }}" method="POST" class="d-none">
       @csrf
      </form>

      </div>

</div>
        </div>
      </nav>
