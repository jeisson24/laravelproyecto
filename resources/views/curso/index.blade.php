@extends('../layouts.app')

@section('contenido')
<?php 
use App\Contenido;

?>
<main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
              <a class="link" href=""> Escritorio</a></li>
          <li class="breadcrumb-item">
            <a href="#" class="link">Administrador</a>
          </li>
          <li class="breadcrumb-item active">Cursos registrados</li>
         
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
               <div class="row">
                   <div class="col-md-12">
                     
                         <button class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Nuevo pais</button><br>
                         <code>Falta programar editar</code>
                         <br><br>
                         <table class="table table-hover table-sm">
                             <tr class="bg-secondary">
                                 <th>ID</th>
                                 <th>NOMBRE DEL CURSO</th>
                                 <th>CATEGORIA</th>
                                 <th>CONTENIDO</th>
                                 <th>CAPITULOS</th>
                                 <th>OPCIONES</th>
                             </tr>
                             @foreach($cursos as $curso)
                             <tr>
                                 <td>{{ $curso->id_curso }}</td>
                                 <td>{{ $curso->nombre_curso }}</td>
                                 <td>{{ $curso->categoria }}</td>
                                 <td>

                                  <?php 
                                    $countContenido = Contenido::where('fk_curso', '=', $curso->id_curso)->get();
                                   echo  $wordCount = $countContenido->count();
                                  ?>

                                 </td>
                                 <td>CAPITULOS</td>
                                 <td>
                                   <a href="">Detalles</a>
                                 </td>
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
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>
    </div>
  </div>
</div>
      @endsection