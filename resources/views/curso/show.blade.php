<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Centro Educativo PROCCEL</title>
    <link rel="icon" href="../images/logo-proccel.png" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">    
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{!!asset('css/estiloShow.css')!!}">
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @auth
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container px-5">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="../images/logo-proccel.png" width="60" alt="PROCCEL"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.inicio')}}">{{ auth() ->user()->p_nombre_u}} {{ auth() ->user()->p_apellido_u}}</a></li> 
                            
                        </ul>
                        <form action="/logout" method="POST">
                                    @csrf
                                    <a class="btn btn-danger" href="#" onclick="this.closest('form').submit()">Cerrar sesión</a>
                                    </form>
                    </div>
                </div>
            </nav>
            @else 
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container px-5">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="../images/logo-proccel.png" width="60" alt="PROCCEL"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Ingresar /</a></li> 
                            <li class="nav-item"><a class="nav-link" href="{{route('registro.index')}}" >Registrar</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
			@endguest
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">{{ $curso->curso}}</h1>
                                <p class="lead fw-normal text-white-50 mb-4">{{ $curso->descripcion }}</p>
                            </div>
                            <div class="row gx-5">
                                <div class="col-xl-12">
                                
                                <div class="row gx-5">
                                        <div class="col-xl-10">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Detalles
                                                    </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                        <ul> <br>
                                                            <li><b>Fecha de Inicio</b><span class="righttext">: {{ $curso->f_inicio }}</span></li>
                                                            <li><b>Duración</b><span class="righttext">: {{ $curso->duracion }} semanas</span></li>
                                                            <li><b>Dia de Clase</b><span class="righttext">: {{ $curso->dia_clase }}</span></li>
                                                            <li><b>Hora</b><span class="righttext">: {{ $curso->h_inicio}} - {{ $curso->h_final}}</span></li>
                                                        <br>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <br>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Inscribir</a>
                                    <a class="btn btn-outline-light btn-lg px-4">Precio: ${{ $curso->costo_u }}</a>
                                </div>
                                </div>
                            </div>
                        </div>
                     <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" width="150%" src="{{ asset('storage').'/'.$curso->foto_c}}" alt="foto curso"/></div>
                    </div>
                </div>
            </header>
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        
                        <div class="col-xl-12">
                            <div class="card border-0 bg-light mt-xl-2">
                                <div class="card text-center">
                                    <div class="card-header">
                                    <img src="../images/usuario.png" style=" width:100px; height:100px; border-radius:100px; 
											border: 2px solid rgb(8, 16, 85);">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $curso->profesor->pnomb_p}} {{ $curso->profesor->pape_p}}</h5>
                                        <p class="card-text">{{ $curso->profesor->n_telf_p}} / {{ $curso->profesor->email_p}}</p>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Instructor del Curso
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Nuestras Instalación</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Cafeteria</h2>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Parqueadero</h2>
                               </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Aulas Equipadas</h2>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">WIFI publico</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"El saber no ocupa espacio, aprende y llega lejos"</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                    <div class="fw-bold">
                                        Proccel
                                        <span class="fw-bold text-primary mx-1">/</span>
                                        Nereida Parra
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <footer class="bg-primary py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white"> &copy; Todos los derechos reservados - Centro Educativo PROCCEL</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Conocenos</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contactanos</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

