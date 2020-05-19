
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light mb-5">
          <a class="navbar-brand mr-5 ml-5" href="#">
            <img src="images/logo_anprotec.png" class="ml-3" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse"
            id="navbarCollapse"
            style="
              font-style: normal;
              font-variant-ligatures: normal;
              font-variant-caps: normal;
              font-variant-numeric: normal;
              font-variant-east-asian: normal;
              font-weight: bold;
              font-stretch: normal;
              font-size: 12px;
              font-family: Arial, Helvetica, sans-serif;
            "
          >
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('site.home') }}#inicio">INÍCIO</a>
              </li>
              <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('site.home') }}#sobre">SOBRE</a>
              </li>
              <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('site.home') }}#contato">CONTATO</a>
              </li>
              <li class="nav-item mr-5">
                <a class="nav-link" href="pesquisa">PESQUISA</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
