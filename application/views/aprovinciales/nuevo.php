<h1 class="text-Left"><b>Nuevo Asambleista Provincial</b></h1>
<form class=""
action="<?php echo site_url(); ?>/aprovinciales/guardar"
method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">Dignidad:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la Dignidad"
          class="form-control"
          name="dignidad_apr" value=""
          id="dignidad_apr">
      </div>
      <div class="col-md-4">
          <label for="">Apellido Asambleista Provincial:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el apellido"
          class="form-control"
          name="apellido_apr" value=""
          id="apellido_apr">
      </div>
      <div class="col-md-4">
        <label for="">Nombre Asambleista Provincial:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el Nombre"
        class="form-control"
        name="nombre_apr" value=""
        id="nombre_apr">
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
          name="movimiento_apr" value=""
          id="movimiento_apr">
      </div>
      <div class="col-md-4">
        <label for="">Latitud:</label>
        <br>
        <input type="float"
        placeholder="Ingrese latitud"
        class="form-control"
        name="latitud_apr" value=""
        id="latitud_apr">
      </div>
      <div class="col-md-4">
        <label for="">Longitud:</label>
        <br>
        <input type="float"
        placeholder="Ingrese longitud"
        class="form-control"
        name="longitud_apr" value=""
        id="longitud_apr">
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
            <a href="<?php echo site_url(); ?>/aprovinciales/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
