<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <br>
        <br>
        <h1>Editar Presidente</h1>


          <form action="<?php echo site_url("/presidentes/procesoActualizar");?>" method="post">
                <div class="container">
                  <div class="row">
                    <input type="" name="id_pre" id="id_pre" value="<?php echo $presidenteditar->id_pre ?>" >

                  </div>
                  <div class="row">
                      <div class="col-md-4 text-center ">
                          <label for="">DIGNIDAD</label>
                          <input type="text" class="form-control" name="dignidad_pre" id="dignidad_pre" placeholder="" value="<?php echo $presidenteditar->dignidad_pre ?>">
                      </div>
                      <div class="col-md-4 text-center">
                          <label for="">Apellido</label>
                          <input type="text" class="form-control"  name="apellido_pre" id="apellido_pre" placeholder="" value="<?php echo $presidenteditar->apellido_pre ?>">
                      </div>

                      <div class="col-md-4 text-center">
                        <label for="">NOMBRE</label>
                        <input type="text" class="form-control" name="nombre_pre" id="nombre_pre" placeholder="" value="<?php echo $presidenteditar->nombre_pre ?>">

                      </div>
                  </div>
                </div>

                <div class="container">
                  <div class="row">
                      <div class="col-md-4 text-center " >
                        <label for="">MOVIMIENTO</label>
                        <input type="text" class="form-control" name="movimiento_pre" id="movimiento_pre" placeholder="" value="<?php echo $presidenteditar->movimiento_pre ?>">
                      </div>
                      <div class="col-md-4 text-center">
                        <label for="">  LATITUD </label>
                        <input type="float" class="form-control" name="latitud_pre" id="latitud_pre" placeholder="" value="<?php echo $presidenteditar->latitud_pre ?>" >
                      </div>
                      <div class="col-md-4 text-center">
                        <label for="">LONGITUD</label>
                        <input type="floar" class="form-control"name="longitud_pre" id="longitud_pre"  placeholder="" value="<?php echo $presidenteditar->longitud_pre ?>">
                      </div>
                  </div>


                </div>
              </div>
              <br>
              <br>
              <br>
              <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                      <br>
                      <br>

                        <button type="submit" name="button" class="btn btn-primary">Guardar</button>&nbsp;
                        <a href="<?php echo site_url(); ?>/presidentes/listado" class="btn btn-danger">Cancelar </a>
                    </div>
                </div>


              </div>
          </form>
        </div>



      </div>
