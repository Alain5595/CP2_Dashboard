<?php include("vistas/cabecera.php"); ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!---Encabezado del dashboard -->
            <h1>Paciente</h1>
            <div class="container">
              <div class="row">
                <div class="col-lg-12"> 
                  
                   

                  <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal"><a href="paciente.nuevo.php" style="color:white;">Agregar</a></button>   
                  
                </div>    
              </div>    
            </div>
          </div>

              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item active">Paciente</li>
                </ol>

              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
             
             <div class="col-12">

              <table id="listProductos" class="display">
            <thead>
                      <tr>
                          <th>Apellidos</th>
                          <th>Nombres</th>
                          <th>Sexo </th>
                          <th>Edad </th>
                          <th>Fecha de nacimiento</th>
                          <th>Estado civil</th>
                          <th>Tipo de documento</th>
                          <th>Numero de documento</th>
                          <th>Celular</th>
                          <th>Domicilio</th>
                          <th>Correo</th>
                          <th>Ocupacion</th>
                          <th>Alergia</th>
                          <th>Intervenciones quirurgicas</th>
                          <th>Vacunas</th>
                      </tr>
                  </thead>
          </table>

        </div>


        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 4.0
    </div>
    <strong>Copyright &copy; 2022 <a href="https://faceboock.com">Alain Peralta</a>.</strong> All rights reserved.
  </footer>

 <?php include("vistas/pie.php"); ?>



<script type="text/javascript">
  
$(document).ready(function(){


$('#listProductos').DataTable( {
        "ajax":{
            type: 'get',
            url: "http://api.miapp.com/api/v1/paciente",
            dataSrc: 'data',
            cache: true
            },
        columns: [
            { data: 'apellido' },
            { data: 'nombre' },
            { data: 'sexo' },
            { data: 'edad' },
            { data: 'fech_nac' },
            { data: 'estado_civil' },
            { data: 'tipo_documento' },
            { data: 'dni' },
            { data: 'celular' },
            { data: 'domicilio' },
            { data: 'correo' },
            { data: 'ocupacion' },
            { data: 'alergias' },
            { data: 'intervencion_quirurgicas' },
            { data: 'vacunas' },
        ]

    });


});

</script>


</body>
</html>
