<h1>LISTADO DE CLIENTES</h1>
<br>
<?php if ($clientes):?>
    <table class="table table-striped table-bordered" >
        <thead>
            <tr>
                <th>ID</th>
                <th>PRIMER APELLIDO</th>
                <th>SEGUNDO APELLIDO</th>
                <th>NOMBRE</th>
                <th>EDAD</th>
                <th>TELEFONO</th>
                <th>CIUDAD</th>
                <th>CANTON</th>
                <th>DESCRIPCION</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $filaTemporal):?>
                <tr>
                  <td>
                      <?php echo $filaTemporal->cedula_cli; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->primer_apellido_cli; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->segundo_apellido_cli; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->nombre_cli; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->edad_cli; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->telefono_cli; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->ciudad_cli; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->canton_cli; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->descripcion_cli; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->email_cli; ?>
                  </td>
                </tr>
            <?php endforeach;?>

        </tbody>

    </table>
<?php else: ?>
    <h1>no hay cliente</h1>
<?php endif;?>
