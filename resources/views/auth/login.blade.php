<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Centro Educativo PROCCEL</title>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="icon" href="../images/logo-proccel.png" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy">
  </head>
  <body>

    <div class="login-box">
     <a href="{{route('home')}}" ><img  src="../images/logo-proccel.png" class="avatar" alt="Logo Proccel"></a> 
      <h1>Iniciar Sesión</h1>
      <form class="" method="POST" action="">
        @csrf
        <!-- USERNAME INPUT -->
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" placeholder="Ingrese su usuario">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Ingrese contraseña">
       
        @error ('message')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> * Error</p>
        @enderror
        
        <input type="submit" value="Ingresar">
        <a href="{{route('registro.index')}}">¿Aun no tienes cuenta?</a>
      </form>
    </div>
  </body>
</html>
