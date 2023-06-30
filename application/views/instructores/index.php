<div class="row">
  <div class="col-md-8">
    <h1>LISTADO DE INSTRUCTORES</h1>
  </div>
  <div class="col-md-4">
    <a href="<?php echo site_url('instructores/nuevo') ?>"class="btn btn-primary">
      <i class="glypicon glypicon-plus"></i>
      Agregar Instructor
    </a>
  </div>
</div>
<br>
<?php if ($instructores):?>
    <table class="table table-striped table-bordered" >
        <thead>
            <tr>
                <th>ID</th>
                <th>CEDULA</th>
                <th>PRIMER APELLIDO</th>
                <th>SEGUNDO APELLIDO</th>
                <th>NOMBRES</th>
                <th>TITULO</th>
                <th>TELEFONO</th>
                <th>DIRECCION</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($instructores as $filaTemporal):?>
                <tr>
                    <td>
                        <?php echo $filaTemporal->id_ins; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->cedula_ins; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->primer_apellido_ins; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->segundo_apellido_ins; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->nombres_ins; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->titulo_ins; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->telefono_ins; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->direccion_ins; ?>
                    </td>

                    <td class="text-center">
                      <a href="<?php echo site_url('/instructores/editar/'), $filaTemporal->id_ins; ?> " title="editar instructor">
                        editar

                    <i class="mdi mdi-pencil"></i>
                      </a>
                        &nbsp;&nbsp;&nbsp
                      <a href="<?php echo site_url('/instructores/eliminar/'), $filaTemporal->id_ins; ?> "title="editar instructor"
                        onclick="return confirm('¿Estas Seguro?');"
                        style="color:red;">
                        eliminar
                    <i class="mdi mdi-close"></i>
                      </a>
                    </td>

                </tr>
            <?php endforeach;?>

        </tbody>

    </table>
<?php else: ?>
    <h1>no hay instructores</h1>
<?php endif;?>
