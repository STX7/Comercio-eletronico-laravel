<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{ route('index') }}">
          <span>
            Expand Informática
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('products') }}">
                Loja
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('why') }}">
                Quem somos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('mensage') }}">Contato</a>
            </li>
          </ul>

          <div class="user_option">
            @auth
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                    Perfil
                </span>
              </a>
            @endauth

            @guest
            <a class="nav-link" href="{{ route('login') }}">
                <span>
                  Login
                </span>
              </a>
            @endguest
            <a href="{{ route('cart.index') }}">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->

  </div>
