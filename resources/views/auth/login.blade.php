<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Centro Educativo PROCCEL</title>
    <link rel="stylesheet" href="{!!asset('css/master.css')!!}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="../images/logo-proccel.png" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy">
  </head>
  <body>

    <div class="login-box">
     <a href="{{route('home')}}" ><img  src="../images/logo-proccel.png" class="avatar" alt="Logo Proccel"></a> 
      <h1>Iniciar Sesión</h1>
      <form class="" method="POST" action="/login">
        @csrf
        <!-- USERNAME INPUT -->
        <label for="Cedula">Nro de cedula</label>
        <input type="text" name="cedula_u" required autofocus value="{{ old('cedula_u')}}" placeholder="Ingrese su cedula">
  
        @error('cedula_u')
        <div class="alert alert-primary " style="font-size: 12px;" role="alert"> {{$message}}</div>
        @enderror 

        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" name="password" required placeholder="Ingrese su contraseña">
       
        @error('error')
        <div class="alert alert-danger " style="font-size: 12px;" role="alert"> {{$message}}</div>
        @enderror 

        <input type="submit" value="Ingresar">
        <a href="{{route('registro.index')}}">¿Aun no tienes cuenta?</a>
      </form>
      
    </div>
    
  </body>
</html>
