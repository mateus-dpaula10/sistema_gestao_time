<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/logos/horriver_plate.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand mx-0" href="{{ route('index.home') }}">
              {{-- <img src="{{ asset('img/logos/horriver_plate.png') }}" alt="Logo time"> --}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              {{-- <span class="navbar-toggler-icon"></span> --}}
              <div></div>
              <div></div>
              <div></div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link {{ Request::routeIs('index.home') ? 'active' : '' }}" href="{{ route('index.home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::routeIs('index.jogos') ? 'active' : '' }}" href="{{ route('index.jogos') }}">Próximos jogos</a>
                </li>
                @auth
                <li class="nav-item">
                  <a class="nav-link {{ Request::routeIs('create.jogos') ? 'active' : '' }}" href="{{ route('create.jogos') }}">Criar jogo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::routeIs('create.foto') ? 'active' : '' }}" href="{{ route('create.foto') }}">Criar fotos</a>
                </li>
                @endauth
                <li class="nav-item">
                  <a class="nav-link {{ Request::routeIs('index.contato') ? 'active' : '' }}" href="{{ route('index.contato') }}">Contato</a>
                </li>
                @guest
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login.login') }}">Login</a>
                </li>
                @endguest
              </ul>

              @auth
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Olá {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route ('login.logout') }}">Sair</a></li>
                  </ul>
                </li>
              </ul>
              @endauth
            </div>
          </div>
          </nav>
      </header>

      <main>
        @yield('content')
      </main>

      <footer>
        <div class="container py-3">
          <div class="row">
            <div class="col-12">
              <p class="text-center mb-0">Horriver Plate &copy; Todos os Direitos Reservados</p>
            </div>
          </div>
        </div>
      </footer>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
