<!-- Modal agregar alumnos -->

<div class="modal fade" id="alumnos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header border-left-primary  bg-white shadow">
<h5 class="modal-title" id="exampleModalLongTitle" style="color:black"><strong>Agregar Alumnos</strong> </h5>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body border-left-primary">
  <form method="post" action="functions/funciones.php" >
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-4">
          <label >Clave de la escuela </label>
          <div class="form-label-group">
            <input type="text" name="cla" id="cdt_agre"  class="form-control" placeholder="Clave de trabajo" required="required" autofocus="autofocus">
          </div>

        </div>
        <div class="col-md-4">
          <label for="tipo">Grado</label>
          <div class="form-label-group">
            <input type="text" name="gra" id="tipo" class="form-control" placeholder="Nivel" required="required">

          </div>
        </div>
        <div class="col-md-4">
          <label for="tipo">Grupo</label>
          <div class="form-label-group">
            <select class="form-control" name="gru">
              <option value="A">A</option>
              <option value="B">B</option>

            </select>


          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-4">
          <label for="nombre">Ciclo escolar</label>
          <div class="form-label-group">
            <select class="form-control" name="cic">
              <option value="2019-2020">2019-2020</option>

            </select>


          </div>
        </div>
        <div class="col-md-4">
          <label for="nombre">Nombres</label>
          <div class="form-label-group">

            <input type="text" name="nom" id="" class="form-control" placeholder="Nombre de la escuela" required="required">

          </div>
        </div>
        <div class="col-md-4">
          <label for="domi">Apellidos</label>
          <div class="form-label-group">

            <input type="text" name="ape" id="" class="form-control" placeholder="Domicilio" required="required">

          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-4">
          <label for="domi">Edad</label>
          <div class="form-label-group">
            <input type="text" name="eda" id="domi" class="form-control" placeholder="Domicilio" required="required">

          </div>
        </div>
        <div class="col-md-4">
          <label for="loca">Curp</label>
          <div class="form-label-group">
            <input type="tex" name="cur" id="loca" class="form-control" placeholder="Ciudad" required="required">

          </div>
        </div>
        <div class="col-md-4">
          <label for="loca">Sexo</label>
          <div class="form-label-group">
            <select class="form-control" name="sex">
              <option value="femenino">Niña</option>
              <option value="masculino">Niño</option>
            </select>

          </div>
        </div>
      </div>
    </div>
    <input type="submit" class="btn btn-primary btn-block" name="alumnos" value="Registrar">

  </form>
</div>
</div>
</div>
</div>



<!-- Modal agregar escuelas -->

<div class="modal fade" id="escuelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header border-left-primary  shadow bg-white">
<h5 class="modal-title" id="exampleModalLongTitle" style="color:black"><strong>Agregar escuela</strong> </h5>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body border-left-primary">
  <form method="post" action="functions/funciones.php" >
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">

          <div class="form-label-group">

            <input type="text" name="cla" id="clave" class="form-control" placeholder="Clave de trabajo" required="required" autofocus="autofocus">
            <label for="clave">Clave de trabajo</label>
          </div>
        </div>
        <div class="col-md-6">


          <div class="form-label-group">
            <select class="form-control" name="niv">
              <option value="PRIMARIA">PRIMARIA</option>
                <option value="PREESCOLAR">PREESCOLAR</option>
            </select>


          </div>
        </div>
      </div>
    </div>
    <div class="form-group">

      <div class="form-label-group">

        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nombre de la escuela" required="required">
        <label for="nom">Nombre de la escuela</label>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">

          <div class="form-label-group">

            <input type="text" name="dom" id="dom" class="form-control" placeholder="Domicilio" required="required">
            <label for="dom" >Domicilio</label>
          </div>
        </div>
        <div class="col-md-6">

          <div class="form-label-group">

            <input type="text" name="ciu" id="ciu" class="form-control" placeholder="Ciudad" required="required">
            <label for="ciu" >Ciudad</label>
          </div>
        </div>
      </div>
    </div>
    <input type="submit" class="btn btn-primary btn-block" name="escuela" value="Registrar">

  </form>
</div>
</div>
</div>
</div>





<!-- Modal agregar maestros -->

<div class="modal fade" id="maestros" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header border-left-primary  shadow bg-white">
<h5 class="modal-title" id="exampleModalLongTitle" style="color:black"><strong>Agregar docente</strong> </h5>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body border-left-primary">
  <form method="post" action="functions/funciones.php">
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-3">
          <div class="form-label-group">
            <input type="text" id="CDT" class="form-control" name="cdt" placeholder="CLAVE CT." required="required" autofocus="autofocus">
            <label for="CDT">CLAVE CT.</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-label-group">
            <input type="text" id="lastName" class="form-control" name="rfc" placeholder="RFC" required="required">
            <label for="lastName">RFC</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-label-group">
            <input type="text" id="lastName" class="form-control" name="cur" placeholder="CURP" required="required">
            <label for="lastName">CURP</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-label-group">
            <input type="text" id="lastName" class="form-control" name="cla" placeholder="CLAVE P" required="required">
            <label for="lastName">CLAVE P</label>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="text" id="firstName" class="form-control" name="nom" placeholder="NOMBRES" required="required" autofocus="autofocus">
            <label for="firstName">NOMBRES</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="text" id="lastName" class="form-control" name="ape" placeholder="APELLIDOS" required="required">
            <label for="lastName">APELLIDOS</label>
          </div>
        </div>

      </div>
    </div>
    <div class="form-group">
      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" name="cor" placeholder="CORREO ELECTRONICO" required="required">
        <label for="inputEmail">CORREO ELECTRONICO</label>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control"  name="pas"placeholder="Password" required="required">
            <label for="inputPassword">CONTRASEÑA</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="password" id="confirmPassword" class="form-control" name="pa1" placeholder="CONFIRMAR CONTRASEÑA" required="required">
            <label for="confirmPassword">CONFIRMAR </label>
          </div>
        </div>
      </div>
    </div>
    <input type="submit" class="btn btn-primary btn-block" name="maestros" value="Crear cuenta">

  </form>
</div>
</div>
</div>
</div>


<!-- Modal editar_alumnos alumnos -->

<div class="modal fade" id="editar_alumnos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header border-left-primary  bg-white shadow">
<h5 class="modal-title" id="exampleModalLongTitle" style="color:black"><strong>Editar Alumnos</strong> </h5>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body border-left-primary">
  <form method="post" action="functions/funciones.php" >
    <input type="text" id="1" hidden name="fol" value="">
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <label >Nombre </label>
          <div class="form-label-group">
            <input type="text" name="nom" id="2" class="form-control" placeholder="Clave de trabajo" required="required" autofocus="autofocus">
          </div>

        </div>
        <div class="col-md-6">
          <label for="tipo">Apellidos</label>
          <div class="form-label-group">
            <input type="text" name="ape" id="3" class="form-control" placeholder="Nivel" required="required">

          </div>
        </div>

      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <label for="nombre">Edad</label>
          <div class="form-label-group">

            <input type="text" name="eda" id="4" class="form-control" placeholder="Nombre de la escuela" required="required">

          </div>
        </div>
        <div class="col-md-6">
          <label for="nombre">Curp</label>
          <div class="form-label-group">

            <input type="text" name="cur" id="5" class="form-control" placeholder="Nombre de la escuela" required="required">

          </div>
        </div>

      </div>
    </div>


    <input type="submit" class="btn btn-primary btn-block" name="editar_alumnos" value="Editar">

  </form>
</div>
</div>
</div>
</div>



<!-- Modal editar_escuelas escuelas -->

<div class="modal fade" id="editar_escuelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header border-left-primary  shadow bg-white">
<h5 class="modal-title" id="exampleModalLongTitle" style="color:black"><strong>Editar escuela</strong> </h5>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body border-left-primary">
  <form method="post" action="functions/funciones.php" >
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">

          <div class="form-label-group">

            <input type="text" name="cla" id="clave_p" class="form-control" placeholder="Clave de trabajo" required="required" autofocus="autofocus">
            <label for="clave">Clave de trabajo</label>
          </div>
        </div>
        <div class="col-md-6">


          <div class="form-label-group">

            <select class="form-control" hidden id="tip_p" name="niv">
              <option value="PRIMARIA">PRIMARIA</option>
                <option value="PREESCOLAR">PREESCOLAR</option>
            </select>


          </div>
        </div>
      </div>
    </div>
    <div class="form-group">

      <div class="form-label-group">

        <input type="text" name="nom" id="nom_p" class="form-control" placeholder="Nombre de la escuela" required="required">
        <label for="nom">Nombre de la escuela</label>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">

          <div class="form-label-group">

            <input type="text" name="dom" id="dom_p" class="form-control" placeholder="Domicilio" required="required">
            <label for="dom" >Domicilio</label>
          </div>
        </div>
        <div class="col-md-6">

          <div class="form-label-group">

            <input type="text" name="ciu" id="ciu_p" class="form-control" placeholder="Ciudad" required="required">
            <label for="ciu" >Ciudad</label>
          </div>
        </div>
      </div>
    </div>
    <input type="submit" class="btn btn-primary btn-block" name="editar_escuelas" value="Editar">

  </form>
</div>
</div>
</div>
</div>
