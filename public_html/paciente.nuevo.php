<?php include("vistas/cabecera.php"); ?>


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!---Encabezado del dashboard -->
            <h1>Paciente</h1>
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
    
  
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Apellidos</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Ingrese su apellido" autocomplete="off" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Nombres</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese su nombre" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Correo electronico</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese e-mail" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Fecha de Nacimiento</label>
      <input type="date" class="form-control" id="validationTooltip04" placeholder="State" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Sexo</label>
      <select id="inputState" class="form-control">
        <option selected>Masculino</option>
        <option>Femenino</option>
        <option>Otros</option>
      </select>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip02">Edad</label>
      <input type="number" class="form-control" id="validationTooltip02" placeholder="Años" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Estado Civil</label>
      <select id="inputState" class="form-control">
        <option selected>Casado</option>
        <option>Soltero</option>
        <option>Separado</option>
        <option>viudo</option>
      </select>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Tipo de documento</label>
      <select id="inputState" class="form-control">
        <option selected>Dni</option>
        <option>Pasaporte</option>
        <option>..</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Numero de documento</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese los digitos" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Celular</label>
      <input type="number" class="form-control" id="validationTooltip02" placeholder="Ingrese numero" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Domicilio</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese el domicilio" required>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationTooltip02">Ocupacion</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese datos" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Alergia</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese datos" required>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationTooltip02">Intervenciones quirurgicas</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese datos" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip02">Vacunas completas</label>
      <select id="inputState" class="form-control">
        <option selected>Si</option>
        <option>No</option>
      </select>
    </div>
  </div>
  <button class="btn btn-success" type="submit">Guardar</button>
  <button class="btn btn-danger" type="reset">Cancelar</button>
</form>

</section>
</div>

<?php include("vistas/pie.php"); ?>
