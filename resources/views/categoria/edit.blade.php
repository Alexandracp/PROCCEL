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

    <title>Categoria - Proccel</title>
    <link rel="icon" href="../images/logo-proccel.png" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy">

</head>

<body>
    <div class="d-flex" id="content-wrapper">
    @include('admin.sidebar')
      <!-- Fin sidebar -->
        <div class="w-100">
            @include('admin.navbar')
        <!-- Page Content -->
        <div id="content" class="container bg-grey w-100">
            <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9 col-md-8">
                                    <h1 class="font-weight-bold mb-0">Editar categoria</h1>
                                </div>
                                <div class="col-lg-3 col-md-4 d-flex flex-row bd-highlight mb-3">
                                    <a class="dropdown-item" href="{{ route('categoria.create')}}"><button class="btn btn-primary w-100 align-self-center">Crear categoria</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <!-- content -->
                <section id="contenido" class="container pEqual" >
                    <div class="container" >
                        <div class="contenido" >
                            <form class="container " method="POST" action="{{ url('/categoria') }}"  role="form" enctype="multipart/form-data">
                                @csrf
                                <br>
                                @include('categoria.form')
                                <div class="btnArea">
                                     <button role="submit" class="btn btn-primary  btn-sm float-right">Guardar</button>
                                </div>
                            </form>
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