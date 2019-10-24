@extends('../layouts.app')

@section('contenido')
<main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
              <a class="link" href=""> Escritorio</a></li>
          <li class="breadcrumb-item">
            <a href="#" class="link">Administrador</a>
          </li>
          <li class="breadcrumb-item active">Paises registrados</li>
         
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
               <div class="row">
                   <div class="col-md-12">
                     
                         <button class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Nueva categoria</button><br>
                         <code>Falta programar editar</code>
                         <br><br>
                         <table class="table table-hover table-sm">
                             <tr class="bg-secondary">
                                 <th>ID</th>
                                 <th>CATEGORIA</th>
                                 <th>CREACIÓN</th>
                                 <th>ACTUALIZACION</th>
                                 <th>OPCIONES</th>
                             </tr>
                             @foreach($categorias as $categoria)
                             <tr>
                                 <td>{{ $categoria->id_categoria}}</td>
                                 <td>{{ $categoria->categoria}}</td>
                                 <td>{{ $categoria->created_at}}</td>
                                 <td>{{ $categoria->updated_at}}</td>
                                 <td>OPCIONES</td>
                             </tr>
                             @endforeach
                            
                         </table>
                   </div>
               </div>
          </div>
        </div>
      </main>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('categorias.store')}}" method="post">
             @csrf 
                <div class="form-group">
                  <label for="">Categoria</label>
                  <input type="text" class="form-control" name="categoria">
                </div>
                <button class="btn btn-primary" type="submit">Crear</button>
           </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>
    </div>
  </div>
</div>
      @endsection