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
   
    <title>Cursos - Proccel</title>
    <link rel="icon" href="../images/logo-proccel.png" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy">

</head>

<body>
    <div class="d-flex" id="content-wrapper">
        @include('admin.sidebar')
        <div class="w-100">
        @include('admin.navbar')
        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">
                  <section class="bg-light py-3">
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-9 col-md-8">
                                <h1 class="font-weight-bold mb-0">Bienvenida {{ auth() ->user()->p_nombre_u}}</h1>
                              </div>
                          </div>
                      </div>
                  </section>

                  <section class="bg-mix py-3">
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <h1 class="text-center">Listado de Cursos</h1>
                                <div class="float-left">
                                   <a class="dropdown-item" href="{{ route('curso.index')}}"><button class="btn btn-primary w-100 align-self-center">Cargar Cursos</button></a>
                                </div>
                                <div class="float-right">
                                  <a href="{{ route('curso.create')}}"><button class="btn btn-primary w-100 align-self-center">Nuevo Curso</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </section>
                  @if (Session::has('mensaje'))
                        <div class="container alert alert-info">
                            <strong>{{ Session::get('mensaje') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                  @endif
              <!-- userProfile -->
              <div class="container userProfile">
                <div class="row">
                  <div class="col-xs-12 col-sm-8 col-lg-12">
                    <!-- accountData -->
                    <div class="accountData">
                         <div class="head">
                            <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ordenado por: </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="perfil_admin.html">Activo</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html">Inactivo</a>
                            </div>
                         </div>
                            <div class="propertiesList">
                                    @if(count($cursos)<=0)
                                    <p class="text-center"> No hay cursos registrados</p>
                                    @endif
                               
                                @foreach ($cursos as $curso)
                                
                                    <article class="propertyRow">
                                        <div class="info">
                                            <div class="imgThumbnail">
                                              <img src="{{ asset('storage').'/'.$curso->foto_c}}" alt="foto curso">
                                            </div>
                                            <div class="textBox">
                                            <h4 class="fontNeuron"><a>{{ $curso->curso }}</a></h4>
                                            <address><i class="fas fa-user"></i>{{ $curso->profesor->pnomb_p}}</address>
                                            <div class="priceArea">
                                                <span class="price fontNeuron">{{ $curso->costo_u }}</span>
                                                <time class="date" datetime="2021-07-20">{{ $curso->f_inicio }}</time>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="btnArea">
                                            <ul class="links list-unstyled">
                                            <li><a href="{{ route('curso.show', $curso->id_curso) }}"><i class="fas fa-info-circle" id="ico"></i></a></li> 

                                            <li><a href=" {{ url( '/curso/'.$curso->id_curso.'/edit')}}"><i class="fas fa-pencil-alt" id="ico"></i></a></li>
                                            <form id="list" action="{{ url('/curso/'.$curso->id_curso ) }}" method="POST">
                                              @csrf
                                              {{ method_field ('DELETE')}}
                                              <button class="btn btn-link"><i class="fas fa-trash"  onclick=" return confirm ('¿Quieres borrar?')"></i></button>
                                            </form>
                                            </ul>
                                        </div>
                                    </article>
                                @endforeach 
                        </div>
                           
                    </div>
                    <!-- pagination -->
                    <nav role="navigation" class="navigation pagination pagination1 fontNeuron">
                      <div class="nav-links">
                        <a href="#" class="prev page-numbers">Previa</a>
                        <a href="list_cursos.html" class="page-numbers current">1</a>
                        <span class="page-numbers">2</span>
                      </div>
                    </nav>
                  </div>
      
                </div>
              </div>
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