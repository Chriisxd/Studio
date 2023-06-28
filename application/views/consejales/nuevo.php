<h1 class="text-Left"><b>Nuevo Consejal</b></h1>
<form class=""
action="<?php echo site_url(); ?>/consejales/guardar"
method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">Dignidad:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la Dignidad"
          class="form-control"
          name="dignidad_con" value=""
          id="dignidad_con">
      </div>
      <div class="col-md-4">
          <label for="">Apellido Consejal:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el apellido"
          class="form-control"
          name="apellido_con" value=""
          id="apellido_con">
      </div>
      <div class="col-md-4">
        <label for="">Nombre Consejal:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el Nombre"
        class="form-control"
        name="nombre_con" value=""
        id="nombre_con">
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
          name="movimiento_con" value=""
          id="movimiento_con">
      </div>
      <div class="col-md-4">
        <label for="">Latitud:</label>
        <br>
        <input type="float"
        placeholder="Ingrese latitud"
        class="form-control"
        name="latitud_con" value=""
        id="latitud_con">
      </div>
      <div class="col-md-4">
        <label for="">Longitud:</label>
        <br>
        <input type="float"
        placeholder="Ingrese longitud"
        class="form-control"
        name="longitud_con" value=""
        id="longitud_con">
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
            <a href="<?php echo site_url(); ?>/consejales/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
