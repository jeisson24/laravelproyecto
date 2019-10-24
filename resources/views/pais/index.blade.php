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
                       
                         <table class="table table-hover">
                             <tr class="bg-secondary">
                                 <th>ID</th>
                                 <th>PAIS</th>
                                 <th>OPCIONES</th>
                             </tr>
                             @foreach($paises as $pais)
                              <tr>
                                  <td>{{ $pais->id_pais }} </td>
                                  <td>{{ $pais->pais }} </td>
                                  <td> 
                                       <a href="" class="btn btn-warning btn-sm">Editar</a>    
                                  </td>
                              </tr>
                              @endforeach
                         </table>
                   </div>
               </div>
          </div>
        </div>
      </main>


      @endsection