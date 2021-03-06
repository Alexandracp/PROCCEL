<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{!!asset('css/style3.css')!!}">
 
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6398d1305a.js" crossorigin="anonymous"></script>

    <title>Panel</title>
    <link rel="icon" href="../images/logo-proccel.png" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy">

</head>

<body>
    <div class="d-flex" id="content-wrapper">
        <!-- Sidebar -->
        <div id="sidebar-container" class="bg-primary">
          <div class="logo" style="margin-left: 30%;">
            <a href="index.html"><img width="100px" src="../images/logo-proccel.png"></a>  
        </div>
        <div class="menu">
          <a href="{{ route('dashboard') }}" class="d-block text-light p-3 border-0"><i class="fas fa-home"></i>
              Inicio</a>
          <a href="{{ route('curso.create') }}" class="d-block text-light p-3 border-0"><i class="fas fa-book-open"></i>
              Registro de Cursos</a>
          <a href="{{ route('curso.index') }}" class="d-block text-light p-3 border-0"><i class="fas fa-th-list"></i>
              Listado de cursos</a>
          <a href="registro_docente.html" class="d-block text-light p-3 border-0"><i class="fas fa-users"></i>
              Registro Docente</a>
          <a href="list_docente.html" class="d-block text-light p-3 border-0"><i class="fas fa-list-ol"></i>
              Listado de docentes</a>
          <a href="list_estud.html" class="d-block text-light p-3 border-0"><i class="fas fa-clipboard-list"></i>
              Listado de Estudiantes</a>
          <a href="list_pago.html" class="d-block text-light p-3 border-0"><i class="fas fa-file-invoice-dollar"></i>
              Pagos registrados</a>
        </div>
        @if(session ('status'))
        {{ session ('status')}}
        @endif
     </div>
      <!-- Fin sidebar -->
        <div class="w-100">

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
                        <a class="dropdown-item" href="perfil_admin.html">Mi perfil</a>
                        <div class="dropdown-divider"></div>
                        <form action="/logout" method="POST">
                          @csrf
                          <a class="dropdown-item" href="#" onclick="this.closest('form').submit()">Cerrar sesi??n</a>
                        </form>
                        
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

              <section class="bg-light py-3">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-9 col-md-8">
                            <h1 class="font-weight-bold mb-0">Bienvenida {{ auth() ->user()->p_nombre_u}}</h1>
                            <p class="lead text-muted">Revisa tu informac??n</p>
                          </div>
                      </div>
                  </div>
              </section>

              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Cursos Activos</h6>
                                        <h3 class="font-weight-bold">{{ $total->count() }}</h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Nro. de inscripciones</h6>
                                        <h3 class="font-weight-bold">10</h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                  <div class="mx-auto">
                                      <h6 class="text-muted">Pagos Procesados</h6>
                                      <h3 class="font-weight-bold">2</h3>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>

              <section>
                  <div class="container">
                      <div class="row">
                         
                          <div class="col-lg-4 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Inscripciones recientes</h6>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="d-flex border-bottom py-2">
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">Andrea Fuentes</h6>
                                          <small class="d-block text-muted">Curso de cocina</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">Manuel Diaz</h6>
                                          <small class="d-block text-muted">Curso de Barberia</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">Daniel Martinez</h6><span class="badge badge-success ml-2">Pago</span>
                                          <small class="d-block text-muted">Curso de Reposteria</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">Marcos Villamizar</h6>
                                          <small class="d-block text-muted">Curso de reparacion de celulares</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2 mb-3">
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">Maria Nu??ez</h6><span class="badge badge-success ml-2">Pago</span>
                                          <small class="d-block text-muted">Curso Manicure</small>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100">Ver todas</button>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </section>

        </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
       
</body>

</html>