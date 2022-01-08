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
    <link rel="stylesheet" href="{!!asset('css/style1.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/style3.css')!!}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6398d1305a.js" crossorigin="anonymous"></script>

    <title>Perfil</title>
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
                            <h1 class="font-weight-bold mb-0">Configuracion de perfil</h1>
                            <p class="lead text-muted">Revisa tu informacón</p>
                          </div>
                      </div>
                  </div>
              </section>
              <section><br></section>
              <div class="col-xs-12 col-sm-8 col-lg-12">
                <!-- accountData -->
                <div class="accountData">
                  <form class="" method="POST" action="" enctype="multipart/form-data">
                    <div class="accountHolder">
                      <div class="imgProfile">
                        <div class="imgThumbnail">
                          <img style="border-radius: 50%;" src="../images/usuario.png" alt="" width="200" height="200">
                          
                          <input type="file" id="formFile" name="foto_c">
                          <a href="#" class="link"><i class="fi flaticon-edit"></i></a>
                        </div>
                      </div>
                      <div class="accountContent">
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                            <label class="font-weight-bold">Primer Nombre <span class="text-danger">*</span></label>
                                <input type="text" name="p_nombre_u" id ="p_nombre_u" class="form-control @error('p_nombre_u')  is-invalid @enderror " value="{{isset( $user->p_nombre_u) ?$user->p_nombre_u:old('p_nombre_u')}}" >
                                @error('p_nombre_u') <div class="font">{{$message}}</div> @enderror </div>
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Segundo Nombre <span class="text-danger">*</span></label>
                                <input type="text" name="s_nombre_u" class="form-control @error('s_nombre_u') is-invalid @enderror" placeholder="Tu segundo nombre" value="{{ old('s_nombre__u')}}" >
                                @error('s_nombre_u') <div class="font">{{$message}}</div> @enderror 
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                            <label class="font-weight-bold">Primer apellido<span class="text-danger">*</span></label>
                                <input type="text" name="p_apellido_u" class="form-control @error('p_apellido_u') is-invalid @enderror" placeholder="Tu primer apellido" value="{{ old('p_apellido_u')}}" >
                                @error('p_apellido_u') <div class="font">{{$message}}</div> @enderror
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                            <label class="font-weight-bold">Segundo apellido <span class="text-danger">*</span></label>
                                <input type="text" name="s_apellido_u" class="form-control @error('s_nombre_u') is-invalid @enderror" placeholder="Tu segundo apellido" value="{{ old('s_apellido_u')}}" >
                                @error('s_nombre_u') <div class="font">{{$message}}</div> @enderror
                            </div>
                          </div>
                        </div>
                          <div class="row">
                            <div class="col-xs-12 col-sm-4">
                              <div class="form-group">
                                <label class="font-weight-bold">Telefono <span class="text-danger">*</span></label>
                                <input type="text" name="n_telf_u" class="form-control @error('n_telf_u') is-invalid @enderror" placeholder="Ej. 04121234567" value="{{ old('n_telf_u')}}">
                                @error('n_telf_u') <div class="font">{{$message}}</div> @enderror
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                              <div class="form-group">
                              <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                                <input type="email" name="email_u" class="form-control @error('email_u') is-invalid @enderror" placeholder="Ingresa tu correo electrónico" value="{{ old('email_u')}}">
                                @error('email_u') <div class="font">{{$message}}</div>  @enderror
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                              <div class="form-group">
                              <label class="font-weight-bold">Genero <span class="text-danger">*</span></label>
                                <select name="id_genero" class="form-control @error('id_genero') is-invalid @enderror" >
                                    <option>-</option>
                                    @foreach ($generos as $genero)
                                    <option value="{{$genero ['id_genero']}}">{{$genero ['genero']}}</option>
                                    @endforeach
                                </select>
                                 @error('id_genero') <div class="font">{{$message}}</div> @enderror
                              </div>
                            </div>
                            </div>
                          <div class="row">
                            <div class="col-xs-12 col-sm-2">
                              <div class="form-group">
                              <label class="font-weight-bold">Tipo</label>
                                <select name="idnaci"  class="form-control 
                                @error('idnaci') is-invalid @enderror">
                                    <option value="" selected disabled>Selecciona una opción</option>
                                    @foreach ($tipos as $tipo)
                                    <option value="{{$tipo ['idnaci']}}">{{$tipo ['abrv_t']}}</option>
                                    @endforeach
                                </select>
                                @error('idnaci') <div class="font">{{$message}}</div> @enderror
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                              <div class="form-group">
                                <label class="font-weight-bold">Fecha de nacimiento <span class="text-danger">*</span></label>
                                <input type="date" name="f_nacimiento_u" id="start" name="trip-start" value="" min="1960-01-01" max="2021-12-31" value="{{ old('f_nacimiento_u')}}" class="form-control @error('f_nacimiento_u') is-invalid @enderror">
                                @error('f_nacimiento_u') <div class="font">{{$message}}</div> @enderror
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                          <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" class="form-control" placeholder="Ingresa una contraseña" value="{{ old('password')}}">
                            @error('password') <div class="font">{{$message}}</div>  @enderror
                          </div>
                        <button type="submit" class="btn alighRight btnSecondary buttonL fontNeuron">Guardar cambios</button>
                      </div>
                    </div>
                  </form>
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