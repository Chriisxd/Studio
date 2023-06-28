<br>
<br>
<div class="main-content">
  <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
                  <br>
                  <div class="row">
                  <div class="col-md-8">
                    <h1>Listado de presidentes</h1>

                  </div>
                  <div class="col-md-4">
                    <a href="<?php echo site_url(); ?>/presidentes/nuevo" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i>Agregar presidente</a>

                  </div>

                  </div>

                  <?php if ($presidentes): ?>
                   <table class="table table-striped table-bordered table-hover">
                     <thead>
                        <tr>
                          <th>ID</th>
                          <th>DIGNIDAD</th>
                          <th>APELLIDO</th>
                          <th>NOMBRE</th>
                          <th>MOVIMIENTO</th>
                          <th>LATITUD</th>
                          <th>LONGITUD</th>
                          <th>ACCIONES</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php foreach ($presidentes as $filaTemporal ): ?>
                         <tr>
                             <td class="text-center"> <?php echo $filaTemporal->id_pre ?></td>
                             <td> <?php echo $filaTemporal->dignidad_pre ?></td>
                             <td> <?php echo $filaTemporal->nombre_pre ?></td>
                             <td> <?php echo $filaTemporal->movimiento_pre ?></td>
                             <td> <?php echo $filaTemporal->latitud_pre ?></td>
                             <td> <?php echo $filaTemporal->longitud_pre?></td>
                             <td class="text-center">
                               <a href="<?php echo site_url();?>/presidentes/editar/<?php echo $filaTemporal->id_pre; ?>"class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit" aria-describedby="tooltip275420"><i class="fas fa-pencil-alt"></i></a>

                             </td>
                             <td class="text-center" >
                               <a href="<?php echo site_url(); ?>/presidentes/eliminar/<?php echo $filaTemporal->id_pre; ?>" class="btn btn-danger btn-action"  title="Borrar Presidente" onclick="return confirm('Esta seguro de borra el registro?');"  ><i class="fas fa-trash"></i></a>

                               </a>
                             </td>

                         </tr>

                       <?php endforeach; ?>
                     </tbody>
                   </table>
                  <?php else: ?>
                  <h1>No hay datos</h1>
                  <?php endif; ?>



      </div>
  </div>

</div>
