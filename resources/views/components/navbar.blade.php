{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
  <div class="container-fluid align-items-center">
    <a class="navbar-brand" href="{{ route('homepage') }}"><i class="bi bi-emoji-grin-fill"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      
      {{-- LINK DI SINISTRA --}}
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link button" aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link button" href="{{ route('aboutUs') }}">Chi Siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link button" href="{{ route('contacts') }}">Contatti</a>
        </li>
        
        @auth
          <li class="nav-item">
            <a class="nav-link button" href="{{ route('merch.create') }}">Inserisci Prodotto</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              I Nostri prodotti
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('merch.list') }}">Tutti i nostri prodotti</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link button" href="{{ route('article.create') }}">Inserisci Articolo</a>
          </li>
        @endauth

        <li class="nav-item">
            <a class="nav-link button" href="{{ route('article.index') }}">I miei Articoli</a>
          </li>
      </ul> 
      
      {{-- LINK DI DESTRA (Autenticazione) --}}
      <ul class="navbar-nav ms-auto">
        @guest
          {{-- Sarà visibile solo se l'utente non sarà autenticato --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Accedi</a>
          </li>
        @endguest
        
        @auth
          {{-- Sarà visibile solo se l'utente sarà autenticato --}}
          <li class="nav-item">
            <span class="nav-link text-light fw-bold">Ciao, {{ Auth::user()->name }}!</span>
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="nav-link border-0 bg-transparent" type="submit">
                Logout
              </button>
            </form>
          </li>
        @endauth
      </ul>
      
    </div>
  </div>
</nav>