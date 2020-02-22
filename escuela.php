    <?php include 'header.php'; ?>


    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb shadown">
          <li class="breadcrumb-item">
            <h1>Dar de alta una escuela </h1>
          </li>

        </ol>

        <div class="card card-register mx-auto mt-5">
          <div class="card-header">Registrar una escuela</div>
          <div class="card-body">
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
                      <input type="text" name="niv" id="tipo" class="form-control" placeholder="Nivel" required="required">
                      <label for="tipo">Nivel</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="nom" id="nombre" class="form-control" placeholder="Nombre de la escuela" required="required">
                  <label for="nombre">Nombre de la escuela</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input type="text" name="dom" id="domi" class="form-control" placeholder="Domicilio" required="required">
                      <label for="domi">Domicilio</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input type="text" name="ciu" id="loca" class="form-control" placeholder="Ciudad" required="required">
                      <label for="loca">Ciudad</label>
                    </div>
                  </div>
                </div>
              </div>
              <input type="submit" class="btn btn-primary btn-block" name="escuela" value="Registrar">

            </form>

          </div>
        </div>


      </div>
      <!-- /.container-fluid -->



    </div>
    <!-- /.content-wrapper -->


<?php include 'footer.php'; ?>
