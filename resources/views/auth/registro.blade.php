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
                    <p class="text-muted mb-5">Ingresa la siguiente información para registrarte.</p>

                    <form class="" method="POST" action="">
                        @csrf

                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Primer Nombre <span class="text-danger">*</span></label>
                                <input type="text" name="p_nombre_u" id ="p_nombre_u" class="form-control" placeholder="Tu primer nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Segundo Nombre <span class="text-danger">*</span></label>
                                <input type="text" name="s_nombre_u" class="form-control" placeholder="Tu segundo nombre">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Primer apellido<span class="text-danger">*</span></label>
                                <input type="text" name="p_apellido_u" class="form-control" placeholder="Tu primer apellido">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Segundo apellido <span class="text-danger">*</span></label>
                                <input type="text" name="s_apellido_u" class="form-control" placeholder="Tu segundo apellido">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-8">
                                <label class="font-weight-bold">Fecha de nacimiento <span class="text-danger">*</span></label>
                                <input type="date" name="f_nacimiento_u" id="start" name="trip-start" value="" min="1960-01-01" max="2021-12-31" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="font-weight-bold">Genero <span class="text-danger">*</span></label>
                                <select name="id_genero" data-placeholder="Selecciona una opción" style=" background-color: var(--color-dark-xx);border-radius: .2rem;
                                padding: 1.6rem 1rem;display: block; width: 100%">
                                    <option value="">-</option>
                                    @foreach ($generos as $genero)
                                    <option value="{{$genero ['id_genero']}}">{{$genero ['genero']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-3">
                                <label class="font-weight-bold">Tipo</label>
                                <select name="id_nacionalidad" data-placeholder="Selecciona una opción" style=" background-color: var(--color-dark-xx);border-radius: .2rem;
                                padding: 1.6rem 1rem;display: block; width: 100%">
                                    <option value="">-</option>
                                    @foreach ($tipos as $tipo)
                                    <option value="{{$tipo ['id_nacionalidad']}}">{{$tipo ['abrev']}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-9">
                                <label class="font-weight-bold">Documento de Identidad <span class="text-danger">*</span></label>
                                <input type="text" name="cedula_u" class="form-control" placeholder="Ingresa tu numero de cedula">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                            <label class="font-weight-bold">Telefono <span class="text-danger">*</span></label>
                                <input type="text" name="n_telf_u" class="form-control" placeholder="Ej. 04121234567">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                                <input type="email" name="email_u" class="form-control" placeholder="Ingresa tu correo electrónico">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Estado</label>
                                <select name="id_estado" id="_estado" data-placeholder="Selecciona una opción" style=" background-color: var(--color-dark-xx);border-radius: .2rem;
                                padding: 1.6rem 1rem;display: block; width: 100%">
                                    <option value="">-</option>
                                    @foreach ($estados as $estado)
                                    <option value="{{$estado ['id_estado']}}">{{$estado['estado']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Ciudad</label>
                                <select name="id_ciudad" id="_ciudad" data-placeholder="Selecciona una opción" style=" background-color: var(--color-dark-xx);border-radius: .2rem;
                                padding: 1.6rem 1rem;display: block; width: 100%">
                                    <!-- <option value="">-</option> -->
                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Dirección<span class="text-danger">*</span></label>
                            <input type="text" name="direccion_u" class="form-control" placeholder="Ingrese dirección">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Ingresa una contraseña">
                        </div>
                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas nuestro aviso de privacidad y los términos y condiciones</label>
                            </div>
                        </div>
                        <button class="btn btn-primary width-100" style="margin-left: 35%;">Regístrate</button>
                        <div class="text-center"><a href="login.html">¿Ya tienes una cuenta?</a></div>
                    </form>

                    <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2020 <a href="index.html">PROCCEL</a></small>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
        const state = document.getElementById("_estado");

        state.addEventListener('change', (e) => { // MALA PRACTICA!!!
            const estado_id = e.target.value;
            console.log(estado_id);
            fetch(`/ciudads`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        estado_id
                    })
                })
                .then(response => response.json())
                .then(data => {
                    var opciones = "<option value=''>Elegir</option>";
                    for (let i in data.lista) {
                        opciones += '<option value="' + data.lista[i].id_ciudad + '">' + data.lista[i].ciudad + '</option>';
                    }
                    document.getElementById("_ciudad").innerHTML = opciones;
                })
                .catch(error => console.log(error));
        });

        //     const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
        // document.getElementById("_estado").addEventListener('change', (e) => {
        // fetch('ciudads',{
        //     method : 'POST',
        //     body: JSON.stringify({texto : e.target.value}),
        //     headers:{
        //         'Content-Type': 'application/json',
        //         "X-CSRF-Token": csrfToken
        //     }
        // }).then(response =>{
        //     console.log(response.json());
        //     return response.json()
        // }).then( data =>{
        //     var opciones ="<option value=''>Elegir</option>";
        //     for (let i in data.lista) {
        //     opciones+= '<option value="'+data.lista[i].id_ciudad+'">'+data.lista[i].ciudad+'</option>';
        //     }
        //     document.getElementById("_ciudad").innerHTML = opciones;
        // }).catch(error =>console.error(error));
    </script>
</body>

</html>