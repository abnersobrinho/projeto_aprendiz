<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href=" {{ route('index') }}">Projeto Aprendiz</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            @if(Auth::check())
                <li class="nav-item active">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Olá, {{ Auth::user()->nome }}</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <!-- todos os usuários -->
                            <a class="dropdown-item" href="{{ route('usuario.index') }}"><i class="material-icons bg-blue">person_outline</i>  Meu perfil</a>
                            
                            <a class="dropdown-item" href="{{ route('dashboard') }}"><i class="material-icons">dashboard</i>  Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"><i class="material-icons">meeting_room</i>  Sair</a>
                            
                        @can('update', App\Usuario::class)
                        <hr>
                            <!-- monitores -->
                            <a class="dropdown-item" href="{{ route('evento.index') }}"><i class="material-icons">event</i>  Evento</a>

                            <a class="dropdown-item" href="#"><i class="material-icons">group</i>  Turmas</a>
                        <hr>
                            <!-- coordenadores -->
                            <a class="dropdown-item" href="{{ route('igreja.index') }}"><i class="material-icons">house</i>  Igreja</a>
                            <a class="dropdown-item" href="#"><i class="material-icons">person</i>  Pastor</a>
                            <a class="dropdown-item" href="{{ route('curso.index') }}"><i class="material-icons">book</i>  Curso</a>
                        <hr>

                            <!-- administradores -->
                            <a class="dropdown-item" href="{{ route('role.index') }}"><i class="material-icons">storage</i>  Função</a>
                            <a class="dropdown-item" href="{{ route('cidade.index') }}"><i class="material-icons">business</i>  Cidade</a>
                            <a class="dropdown-item" href="{{ route('area.index') }}"><i class="material-icons">tab</i>  Área</a>
                            <a class="dropdown-item" href="#"><i class="material-icons">build</i>  Configurações</a>
                        @endcan

                        </div>
                    </div>
                </li>                
            @else
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>    
            @endif
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </div>
</nav>