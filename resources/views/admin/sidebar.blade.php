<!-- Sidebar -->
<div id="sidebar-container" class="bg-primary">
          <div class="logo" style="margin-left: 30%;">
            <a href="index.html"><img width="100px" src="../images/logo-proccel.png"></a>  
        </div>
        <div class="menu">
          <a href="{{ route('admin.inicio') }}" class="d-block text-light p-3 border-0"><i class="fas fa-home"></i>
              Inicio</a>
          <a href="{{ route('categoria.index') }}" class="d-block text-light p-3 border-0"><i class="fas fa-columns"></i></i>
              Categorias</a>
          <a href="{{ route('curso.create') }}" class="d-block text-light p-3 border-0"><i class="fas fa-book-open"></i>
              Registro de Cursos</a>
          <a href="{{ route('curso.index') }}" class="d-block text-light p-3 border-0"><i class="fas fa-th-list"></i>
              Listado de cursos</a>
          <a href="{{ route('profesor.create') }}" class="d-block text-light p-3 border-0"><i class="fas fa-users"></i>
              Registro Docente</a>
          <a href="{{ route('profesor.index') }}" class="d-block text-light p-3 border-0"><i class="fas fa-list-ol"></i>
              Listado de docentes</a>
          <a href="list_estud.html" class="d-block text-light p-3 border-0"><i class="fas fa-clipboard-list"></i>
              Listado de Estudiantes</a>
          <a href="list_pago.html" class="d-block text-light p-3 border-0"><i class="fas fa-file-invoice-dollar"></i>
              Pagos registrados</a>
        </div>
        @if(session ('status'))
        {{ session ('status')}}
        @endif
     </div>