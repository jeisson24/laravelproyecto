<div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
             Escritorio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=" {{ route('paises.index') }}">
                  Paises 
              </a>
            </li> 
  
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                    Cursos</a>
                  <ul class="nav-dropdown-items">
                  <li class="nav-item">
                        <a class="nav-link" href="{{ route('categorias.index') }}">
                        <i class="nav-icon icon-puzzle"></i> Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cursos.index') }}">
                        <i class="nav-icon icon-puzzle"></i> Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contenidos.index') }}">
                        <i class="nav-icon icon-puzzle"></i> Contenido</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('capitulos.index') }}">
                        <i class="nav-icon icon-puzzle"></i> Capitulos</a>
                    </li>
    
                   </ul>
             </li>       
          </ul>
        </nav>
      </div>