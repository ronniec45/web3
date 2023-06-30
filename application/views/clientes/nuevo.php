<h1>NUEVO CLIENTE</h1>
<form class="" action="<?php echo site_url(); ?>/clientes/guardar1" method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">Cédula:</label>
          <br>
          <input type="number"
          placeholder="Ingrese la cédula"
          class="form-control"
          name="cedula_cli" value="" id="cedula_cli">
      </div>
      <div class="col-md-4">
          <label for="">Primer Apellido:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el primer apellido"
          class="form-control"
          name="primer_apellido_cli" value="" id="primer_apellido_cli">
      </div>
      <div class="col-md-4">
        <label for="">Segundo Apellido:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el segundo apellido"
        class="form-control"
        name="segundo_apellido_cli" value="" id="segundo_apellido_cli">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">Nombres:</label>
          <br>
          <input type="text"
          placeholder="Ingrese los nombres"
          class="form-control"
          name="nombres_cli" value="" id="nombre_cli">
      </div>
       <div class="col-md-4">
        <label for="">Edad:</label>
        <br>
        <input type="text"
        placeholder="Ingrese su edad"
        class="form-control"
        name="edad_cli" value="" id="edad_cli">
      </div>
      <div class="col-md-4">
        <label for="">Teléfono:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el telefono"
        class="form-control"
        name="telefono_cli" value="" id="telefono_cli">
      </div>

      <div class="col-md-4">
        <label for="">Ciudad:</label>
        <br>
        <input type="text"
        placeholder="Ingrese su ciudad"
        class="form-control"
        name="ciudad_cli" value="" id="ciudad_cli">
      </div>

      <div class="col-md-4">
        <label for="">Canton:</label>
        <br>
        <input type="text"
        placeholder="Ingrese su canton"
        class="form-control"
        name="canton_cli" value="" id="canton_cli">
      </div>
    </div>

    </div>

    <br>
    <div class="row">
      <div class="col-md-12">
          <label for="">DESCRIPCION BREVE:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la descripcion"
          class="form-control"
          name="descripcion_cli" value="" id="descripcion_cli">
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
            <a href="<?php echo site_url(); ?>/clientes/index" class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
