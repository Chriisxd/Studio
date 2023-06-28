<h1 class="text-Left"><b>Nuevo Prefecto</b></h1>
<form class=""
action="<?php echo site_url(); ?>/prefectos/guardar"
method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">Dignidad:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la Dignidad"
          class="form-control"
          name="dignidad_fec" value=""
          id="dignidad_fec">
      </div>
      <div class="col-md-4">
          <label for="">Apellido Prefecto:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el apellido"
          class="form-control"
          name="apellido_fec" value=""
          id="apellido_fec">
      </div>
      <div class="col-md-4">
        <label for="">Nombre Prefecto:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el Nombre"
        class="form-control"
        name="nombre_fec" value=""
        id="nombre_fec">
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
          name="movimiento_fec" value=""
          id="movimiento_fec">
      </div>
      <div class="col-md-4">
        <label for="">Latitud:</label>
        <br>
        <input type="float"
        placeholder="Ingrese latitud"
        class="form-control"
        name="latitud_fec" value=""
        id="latitud_fec">
      </div>
      <div class="col-md-4">
        <label for="">Longitud:</label>
        <br>
        <input type="float"
        placeholder="Ingrese longitud"
        class="form-control"
        name="longitud_fec" value=""
        id="longitud_fec">
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
            <a href="<?php echo site_url(); ?>/prefectos/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
