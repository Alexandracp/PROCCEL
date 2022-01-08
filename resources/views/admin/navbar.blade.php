
         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container">
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="../images/usuario.png" class="img-fluid rounded-circle avatar mr-2"
                      alt="foto_perfil" /> {{ auth() ->user()->p_nombre_u}} {{ auth() ->user()->p_apellido_u}} </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.perfil') }}">Mi perfil</a>
                        <div class="dropdown-divider"></div>
                        <form action="/logout" method="POST">
                          @csrf
                          <a class="dropdown-item" href="#" onclick="this.closest('form').submit()">Cerrar sesión</a>
                        </form>
                        
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- Fin Navbar -->