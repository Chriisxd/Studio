<h1 class="text-Left"><b>Nuevo Asambleista Nacional</b></h1>
<form class=""
action="<?php echo site_url(); ?>/anacionales/guardar"
method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">Dignidad:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la Dignidad"
          class="form-control"
          name="dignidad_ana" value=""
          id="dignidad_ana">
      </div>
      <div class="col-md-4">
          <label for="">Apellido Asambleista Nacional:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el apellido del Asambleista"
          class="form-control"
          name="apellido_ana" value=""
          id="apellido_ana">
      </div>
      <div class="col-md-4">
        <label for="">Nombre Asambleista Nacional:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el Nombre del Asambleista"
        class="form-control"
        name="nombre_ana" value=""
        id="nombre_ana">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">Movimiento:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el movimiento del Asambleista"
          class="form-control"
          name="movimiento_ana" value=""
          id="movimiento_ana">
      </div>
      <div class="col-md-4">
        <label for="">Latitud Asambleista:</label>
        <br>
        <input type="float"
        placeholder="Ingrese latitud"
        class="form-control"
        name="latitud_ana" value=""
        id="latitud_ana">
      </div>
      <div class="col-md-4">
        <label for="">Longitud Asambleista:</label>
        <br>
        <input type="float"
        placeholder="Ingrese latitud"
        class="form-control"
        name="longitud_ana" value=""
        id="longitud_ana">
      </div>
    </div>

    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/anacionales/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
