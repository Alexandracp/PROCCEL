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
    <link rel="stylesheet" href="{!!asset('css/style1.css')!!}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6398d1305a.js" crossorigin="anonymous"></script>

    <title>{{ auth() ->user()->p_nombre_u}} {{ auth() ->user()->p_apellido_u}}</title>
    <link rel="icon" href="../images/logo-proccel.png" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy">

</head>

<body>
    <div class="d-flex" id="content-wrapper">
      @include('admin.sidebar')
      <!-- Fin sidebar -->
        <div class="w-100">
       @include('admin.navbar')
        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

              <section class="bg-light py-3">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-9 col-md-8">
                            <h1 class="font-weight-bold mb-0">Bienvenida  {{ auth() ->user()->p_nombre_u}} </h1>
                          </div>
                      </div>
                  </div>
              </section>

              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <h1 class="text-center">Listado de docentes</h1>
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
                      <!-- propertiesList -->
                      <div class="propertiesList">
                        <table class="table table-striped">
                          <div class="">
                            <h4 class="fontNeuron">Todos</h4>
                          </div>
                          <div class="sortGroup">
                            <strong class="groupTitle fwNormal">Mostrar:</strong>
                            <div class="dropdown">
                              <button aria-expanded="true" aria-haspopup="false" data-toggle="dropdown" id="sortGroup" type="button" class="dropdown-toggle buttonReset">Todos</button>
                              <ul aria-labelledby="sortGroup" class="dropdown-menu dropdown-menu-right">
                                <li><a href="aprobados.html">Activos</a></li>
                              </ul>
                            </div>
                          </div>
                          <thead>
                            <tr>
                              <th>Nombre completo</th>
                              <th>Apellido completo</th>
                              <th>Cédula</th>
                              <th>Teléfono</th>
                              <th>Email</th>
                            </tr>
                          </thead>
                          @if(count($profesors)<=0)
                              <tr>
                                <td colspan="5" class="text-center">No hay docentes registrados</td>
                          @endif
                          @foreach ($profesors as $profesor)
                          <tbody>
                                <tr>
                                  <td>{{ $profesor->pnomb_p}} {{ $profesor->snomb_p}}</td>
                                  <td>{{ $profesor->pape_p}} {{ $profesor->sape_p}}</td>
                                  <td>{{ $profesor->cedu_p}}</td>
                                  <td>{{ $profesor->ntel_p}}</td>
                                  <td>{{ $profesor->emai_p}}</td>
                                  <td>
                                    <a href="{{ route('profesor.edit', $profesor->id_prof) }}"><i class="fas fa-pencil-alt"></i></a>
                                  </td>
                                  <td>
                                    <form id="list" action="{{ url('/profesor/'.$profesor->id_prof) }}" method="POST">
                                        @csrf
                                        {{ method_field ('DELETE')}}
                                        <button class="btn btn-link"><i class="fas fa-trash"  onclick=" return confirm ('¿Quieres borrar?')"></i></button>
                                        </form>
                                  </td>
                                </tr>
                          </tbody>
                          @endforeach 
                        </table>
                        
                      </div>
                    </div>
                    <!-- pagination -->
                    <nav role="navigation" class="navigation pagination pagination1 fontNeuron">
                      <div class="nav-links">
                        
                        <a href="#" class="prev page-numbers">Previa</a>
                        <a href="#" class="page-numbers current">1</a>
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