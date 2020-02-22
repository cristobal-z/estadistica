    <?php include 'header.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <h1 align = "center">Dar de alta un alumno </h1>
          </li>

        </ol>

        <div class="card card-register mx-auto mt-5">
          <div class="card-header">Datos de alumno</div>
          <div class="card-body">
            <form method="post" action="functions/funciones.php" >
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4">
                    <div class="form-label-group">
                      <input type="text" name="cla" id="clave" class="form-control" placeholder="Clave de trabajo" required="required" autofocus="autofocus">
                      <label for="clave">Clave de la escuela </label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-label-group">
                      <input type="text" name="gra" id="tipo" class="form-control" placeholder="Nivel" required="required">
                      <label for="tipo">Grado</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-label-group">
                      <input type="text" name="gru" id="tipo" class="form-control" placeholder="Nivel" required="required">
                      <label for="tipo">Grupo</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4">
                    <div class="form-label-group">
                      <input type="text" name="cic" id="nombre" class="form-control" placeholder="Nombre de la escuela" required="required">

                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-label-group">
                      <input type="text" name="nom" id="nombre" class="form-control" placeholder="Nombre de la escuela" required="required">
                      <label for="nombre">Nombres</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-label-group">
                      <input type="text" name="ape" id="domi" class="form-control" placeholder="Domicilio" required="required">
                      <label for="domi">Apellidos</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4">
                    <div class="form-label-group">
                      <input type="text" name="eda" id="domi" class="form-control" placeholder="Domicilio" required="required">
                      <label for="domi">Edad</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-label-group">
                      <input type="tex" name="cur" id="loca" class="form-control" placeholder="Ciudad" required="required">
                      <label for="loca">Curp</label>
                    </div>
                  </div>
                  <div class="col-md-4">
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
      <!-- /.container-fluid -->



    </div>
    <?php include 'footer.php'; ?>






    <!-- /.content-wrapper -->
