@extends('../layouts.app')

@section('contenido')
<!--<main class="main">-->
        <!-- Breadcrumb-->
       <!-- <ol class="breadcrumb">
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
                     
                         <button class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Nuevo pais</button><br>
                         <code>Falta programar editar</code>
                         <br><br>
                         <table class="table table-hover table-sm">
                             <tr class="bg-secondary">
                                 <th>ID</th>
                                 <th>PAIS</th>
                                 <th>CREACIÓN</th>
                                 <th>ACTUALIZACION</th>
                                 <th>OPCIONES</th>
                             </tr>
                            
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

  
</div>-->

<div class="container">

<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Formulario de registro equipos</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
<label class="col-md-5 control-label">Primer Nombre</label>  
<div class="col-md-5 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="first_name" placeholder="Primer Nombre" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-5 control-label" >Segundo Nombre</label> 
<div class="col-md-5 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="Segundo Nombre" class="form-control"  type="text">
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-5 control-label" >Serial Equipo</label> 
<div class="col-md-5 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="serial" placeholder="Ingrese serial" class="form-control"  type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-5 control-label" >Marca Equipo </label> 
<div class="col-md-5 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="marca" placeholder="Marca Equipo en mayuscula" class="form-control"  type="text">
</div>
</div>
</div>

<div class="form-group"> 
<label class="col-md-5 control-label">Sede</label>
<div class="col-md-5 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select name="department" class="form-control selectpicker">
  <option value="">Seleccione sede</option>
  <option>Colombia</option>
  <option> ceet</option>
  <option >calle 63</option>
  <option >alamos</option>
 
</select>
</div>
</div>
</div>


<!-- Text input-->
   <div class="form-group">
<label class="col-md-5 control-label">Correo Electronico</label>  
<div class="col-md-5 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email" placeholder="Correo Electronico" class="form-control"  type="text">
</div>
</div>
</div>
<!--https://colorlib.com/preview/#haircare-->

<div class="form-group"> 
<label class="col-md-5 control-label">Tipo de equipo </label>
<div class="col-md-5 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select name="department" class="form-control selectpicker">
  <option value="">Seleccione tipo</option>
  <option>Escritorio</option>
  <option>Portail</option>
 
</select>
</div>
</div>
</div>

<!-- Text input-->
   
<div class="form-group">
<label class="col-md-5 control-label">Contacto No.</label>  
<div class="col-md-5 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="contact_no" placeholder="(+57)" class="form-control" type="text">
</div>
</div>
</div>

<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-5 control-label"></label>
<div class="col-md-5"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGUARDAR <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->

#success_message{ display: none;}

<script>  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter your First Name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your Last Name'
                    }
                }
            },
			 user_name: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Username'
                    }
                }
            },
			 user_password: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Password'
                    }
                }
            },
			confirm_password: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please confirm your Password'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },
            contact_no: {
                validators: {
                  stringLength: {
                        min: 12, 
                        max: 12,
                    notEmpty: {
                        message: 'Please enter your Contact No.'
                     }
                }
            },
			 department: {
                validators: {
                    notEmpty: {
                        message: 'Please select your Department/Office'
                    }
                }
            },
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
}); </script>
      @endsection