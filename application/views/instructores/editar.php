<h1>EDITAR INSTRUCTOR</h1>
<form class=""
id="frm_editar_instructor"
action="OJO"
method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">Cédula:
              <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="number"
          placeholder="Ingrese la cédula"
          class="form-control"
          required
          name="cedula_ins" value="<?php echo $instructorEditar->cedula_ins; ?>" id="cedula_ins">
      </div>
      <div class="col-md-4">
          <label for="">Primer Apellido:
              <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="text"
          placeholder="Ingrese el primer apellido"
          class="form-control"
          required
          name="primer_apellido_ins" value="" id="primer_apellido_ins">
      </div>
      <div class="col-md-4">
        <label for="">Segundo Apellido:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el segundo apellido"
        class="form-control"
        name="segundo_apellido_ins" value="" id="segundo_apellido_ins">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">Nombre:
              <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="text"
          placeholder="Ingrese los nombres"
          class="form-control"
          required
          name="nombres_ins" value="" id="nombres_ins">
      </div>
      <div class="col-md-4">
          <label for="">Título:
              <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="text"
          placeholder="Ingrese el titulo"
          class="form-control"
          required
          name="titulo_ins" value="" id="titulo_ins">
      </div>
      <div class="col-md-4">
        <label for="">Teléfono:
            <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="number"
        placeholder="Ingrese el telefono"
        class="form-control"
        required
        name="telefono_ins" value="" id="telefono_ins">
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-12">
          <label for="">Dirección:
              <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="text"
          placeholder="Ingrese la direccion"
          class="form-control"
          required
          name="direccion_ins" value="" id="direccion_ins">
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
            <a href="<?php echo site_url(); ?>/instructores/index" class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<!-- validacion con jquery validate -->
<script type="text/javascript">
  $("#frm_editar_instructor").validate({
    rules:{
      cedula_ins:{
        digits:true,
        required:true,
        minlength:10,
        maxlength:10,
        },
      primer_apellido_ins:{
        // letras:true,
        required:true,
        minlength:3,
        maxlength:150,
        },
        nombres_ins:{
        required:true,
        minlength:3,
        maxlength:150,
        },
        titulo_ins:{
        required:true,
        minlength:3,
        maxlength:150,
        },
        telefono_ins:{
        digits:true,
        required:true,
        minlength:10,
        maxlength:150,
        },
        direccion_ins:{
        required:true,
        minlength:5,
        maxlength:150,
        }

    },
    messages:{
      cedula_ins:{
        digits:"Solo se acepta numeros",
        number:"Solo se acepta numeros",
        required:"Ingrese el numero de Cedula.",
        minlength:"Cedula incorrecta, ingrese 10 digitos",
        maxlength:"Cedula incorrecta, ingrese 10 digitos",
      },
      primer_apellido_ins:{
        // letras:"Solo se aceptan letras",
        required:"Por Favor ingrese el primer apellido",
        minlength:"El apellido debe tener al menos 3 caracteres",
        maxlength:"Apellido incorrecto",
      },
        nombres_ins:{
        required:"Por Favor ingrese sus nombres.",
        minlength:"El nombre debe tener al menos 3 caracteres",
        maxlength:"Nombres incorrectos",
      },
      titulo_ins:{
      required:"Por Favor ingrese su titulo.",
      minlength:"El titulo debe tener al menos 3 caracteres",
      maxlength:"Titulo incorrecto",
      },
      telefono_ins:{
      digits:"Solo se acepta numeros",
      number:"Solo se acepta numeros",
      required:"Por Favor ingrese su telefono.",
      minlength:"El Telefono debe tener al menos 10 caracteres",
      maxlength:"Telefono incorrecto",
      },
      direccion_ins:{
      required:"Por Favor ingrese su direccion.",
      minlength:"La Dirección debe tener al menos 5 caracteres",
      maxlength:"Dirección   incorrecto",
      }

    }
  });
</script>
