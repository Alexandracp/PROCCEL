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
    
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/style3.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6398d1305a.js" crossorigin="anonymous"></script>

    <title>Registro de cursos</title>
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
        <a href="panel_admin.html" class="d-block text-light p-3 border-0"><i class="fas fa-home"></i>
            Inicio</a>
        <a href="{{ route('cursos.create') }}" class="d-block text-light p-3 border-0"><i class="fas fa-book-open"></i>
            Registro de Cursos</a>
        <a href="{{ route('cursos.index') }}" class="d-block text-light p-3 border-0"><i class="fas fa-th-list"></i>
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
                      alt="foto_perfil" />
                    Alexandra Cárdenas
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="perfil_admin.html">Mi perfil</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="index.html">Cerrar sesión</a>
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
                            <h1 class="font-weight-bold mb-0">Registrar nuevo curso</h1>
                          </div>
                          <div class="col-lg-3 col-md-4 d-flex">
                            <a class="dropdown-item" href="{{ route('cursos.index')}}"><button class="btn btn-primary w-100 align-self-center">Listado de cursos</button></a>
                          </div>
                      </div>
                  </div>
              </section>

              <main>
                <!-- content -->
                <section id="content" class="container pEqual">
                    <div class="addProperty">
                        <div class="formContent">
                            <form method="POST" action="{{ route('cursos.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf
                                <header class="contentHead">
                                    <h1 class="font-weight-bold">Datos del curso</h1>
                                </header>
                                @include('curso.form')
                            </form>
                        </div>
                    </div>
                </section>
                
              </main>
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

@section('template_title')
    Create Curso
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Curso</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cursos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('curso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
