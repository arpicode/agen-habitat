<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark" aria-label="Navigation principale">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img class="rounded-1" src="/images/logo.svg" alt="Agen Habitat" width="" height="32">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          @auth
            @if (Auth::user()->role === 'inspecteur')
            {{-- Menu des inspecteurs --}}
            <li class="nav-item">
              <a class="nav-link" href="/inspecteur">Inspecteur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tournees/{{Auth::user()->id}}">Tournées</a>
            </li>
            @endif


            @if(Auth::user()->role === 'admin')
            {{-- Menu des admins --}}
            <li class="nav-item">
              <a class="nav-link" href="/admin">Admin</a>
            </li>
            @endif


            @if(Auth::user()->role === 'super')
            {{-- Menu des supersadmins --}}
            <li class="nav-item">
              <a class="nav-link" href="/superadmin">Super Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/users">Utilisateurs</a>
            </li>
            @endif
          @endauth
        </ul>

        @php
        $roleColor = '';
        if (Auth::user() !== null) {

            switch (Auth::user()->role) {
                case 'inspecteur':
                $roleColor = 'info';
                break;
                
                case 'admin':
                $roleColor = 'warning';
                break;
                
                case 'super':
                $roleColor = 'danger';
                break;
            }
        }
        @endphp
  
        <ul class="navbar-nav">
          <li class="nav-item dropdown me-4">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-fill text-{{$roleColor}}"></i>
              @auth
                {{ Auth::user()->email }}
              @else
                Connexion
              @endauth
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              @auth
              <li>
                <form action="/deconnecter" method="POST">
                  @csrf
                  <button class="btn btn-link text-decoration-none text-reset" type="submit"><i class="bi bi-power me-2"></i>Déconnexion</button>
                </form>
              </li>
              @else
              <li><a class="dropdown-item" href="/connecter"><i class="bi bi-box-arrow-in-right me-2"></i>Se connecter</a></li>
              @endauth
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  