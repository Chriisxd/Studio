<h1 class="text-Left"><b>Nuevo Candidato presidencial</b></h1>
<form class=""
action="<?php echo site_url(); ?>/presidentes/guardar"
method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">Dignidad:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la Dignidad"
          class="form-control"
          name="dignidad_pre" value=""
          id="dignidad_pre">
      </div>
      <div class="col-md-4">
          <label for="">Apellido:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el apellido"
          class="form-control"
          name="apellido_pre" value=""
          id="apellido_pre">
      </div>
      <div class="col-md-4">
        <label for="">Nombre:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el Nombre"
        class="form-control"
        name="nombre_pre" value=""
        id="nombre_pre">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">Movimiento:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el movimiento"
          class="form-control"
          name="movimiento_pre" value=""
          id="movimiento_pre">
      </div>
      <div class="col-md-4">
        <label for="">Latitud:</label>
        <br>
        <input type="float"
        placeholder="Ingrese latitud"
        class="form-control"
        name="latitud_pre" value=""
        id="latitud_pre">
      </div>
      <div class="col-md-4">
        <label for="">Longitud:</label>
        <br>
        <input type="float"
        placeholder="Ingrese longitud"
        class="form-control"
        name="longitud_pre" value=""
        id="longitud_pre">
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
            <a href="<?php echo site_url(); ?>/presidentes/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
