<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link rel="stylesheet" href="{!!asset('css/estilo.css')!!}">
    <title>Centro Educativo PROCCEL</title>
    <link rel="icon" href="../images/logo-proccel.png" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy">

</head>

<body>
    <section class="container-fluid">
        <div class="row no-gutters bg-dark">
            <div class="col-xl-5 col-lg-12 register-bg">

                <div class="position-absolute testiomonial p-4">
                    <h3 class="font-weight-bold text-light">Cambia tu futuro hoy</h3>
                    <p class="lead text-light">Registrate e inscribete en nuestro cursos y emprende tu negocio.</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Crea tu cuenta gratis</h1>
                    <strong class=" mb-5">Ingresa la siguiente información para registrarte.</strong><br><br>

                    <form class="" method="POST" action="">
                        @csrf

                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Primer Nombre <span class="text-danger">*</span></label>
                                <input type="text" name="p_nombre_u" id ="p_nombre_u" class="form-control @error('p_nombre_u')  is-invalid @enderror " placeholder="Tu primer nombre" value="{{ old('p_nombre_u')}}" >
                                @error('p_nombre_u') <div class="font">{{$message}}</div> @enderror    
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Segundo Nombre <span class="text-danger">*</span></label>
                                <input type="text" name="s_nombre_u" class="form-control @error('s_nombre_u') is-invalid @enderror" placeholder="Tu segundo nombre" value="{{ old('s_nombre__u')}}" >
                                @error('s_nombre_u') <div class="font">{{$message}}</div> @enderror    
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Primer apellido<span class="text-danger">*</span></label>
                                <input type="text" name="p_apellido_u" class="form-control @error('p_apellido_u') is-invalid @enderror" placeholder="Tu primer apellido" value="{{ old('p_apellido_u')}}" >
                                @error('p_apellido_u') <div class="font">{{$message}}</div> @enderror
                                </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Segundo apellido <span class="text-danger">*</span></label>
                                <input type="text" name="s_apellido_u" class="form-control @error('s_nombre_u') is-invalid @enderror" placeholder="Tu segundo apellido" value="{{ old('s_apellido_u')}}" >
                                @error('s_nombre_u') <div class="font">{{$message}}</div> @enderror
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-8">
                                <label class="font-weight-bold">Fecha de nacimiento <span class="text-danger">*</span></label>
                                <input type="date" name="f_nacimiento_u" id="start" name="trip-start" value="" min="1960-01-01" max="2021-12-31" value="{{ old('f_nacimiento_u')}}" class="form-control @error('f_nacimiento_u') is-invalid @enderror">
                                @error('f_nacimiento_u') <div class="font">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label class="font-weight-bold">Genero <span class="text-danger">*</span></label>
                                <select name="id_genero" class="@error('id_genero') is-invalid @enderror" data-placeholder="Selecciona una opción" style=" background-color: var(--color-dark-xx);border-radius: .2rem;
                                padding: 1.6rem 1rem;display: block; width: 100%">
                                    <option value="" selected disabled>-</option>
                                    @foreach ($generos as $genero)
                                    <option value="{{$genero ['id_genero']}}">{{$genero ['genero']}}</option>
                                    @endforeach
                                </select>
                                 @error('id_genero') <div class="font">{{$message}}</div> @enderror
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-3">
                                <label class="font-weight-bold">Tipo</label>
                                <select name="idnaci"  class="@error('idnaci') is-invalid @enderror" style=" background-color: var(--color-dark-xx);border-radius: .2rem;
                                padding: 1.6rem 1rem;display: block; width: 100%">
                                    <option value="" selected disabled>-</option>
                                    @foreach ($tipos as $tipo)
                                    <option value="{{$tipo ['idnaci']}}">{{$tipo ['abrv_t']}}</option>
                                    @endforeach
                                </select>
                                @error('idnaci') <div class="font">{{$message}}</div> @enderror
                            </div>

                            <div class="form-group col-md-9">
                                <label class="font-weight-bold">Documento de Identidad <span class="text-danger">*</span></label>
                                <input type="text" name="cedula_u" class="form-control @error('cedula_u') is-invalid @enderror" placeholder="Ingresa tu numero de cedula" value="{{ old('cedula_u')}}">
                                @error('cedula_u') <div class="font">{{$message}}</div> @enderror
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                            <label class="font-weight-bold">Telefono <span class="text-danger">*</span></label>
                                <input type="text" name="n_telf_u" class="form-control @error('n_telf_u') is-invalid @enderror" placeholder="Ej. 04121234567" value="{{ old('n_telf_u')}}">
                                @error('n_telf_u') <div class="font">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                                <input type="email" name="email_u" class="form-control @error('email_u') is-invalid @enderror" placeholder="Ingresa tu correo electrónico" value="{{ old('email_u')}}">
                                @error('email_u') <div class="font">{{$message}}</div>  @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" class="form-control" placeholder="Ingresa una contraseña" value="{{ old('password')}}">
                            @error('password') <div class="font">{{$message}}</div>  @enderror
                        </div>
                        <button class="btn btn-danger width-100" style="margin-left: 35%;">Regístrate</button>
                        <div class="text-center"><a href="{{route('login')}}">¿Ya tienes una cuenta?</a></div>
                    </form>

                    <small class="d-inline-block mt-5">Todos los derechos reservados | © 2020 <a class="text-danger" href="{{route('home')}}">PROCCEL</a></small>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>

</html>