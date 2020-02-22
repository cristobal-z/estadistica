<?php
  session_start();
 if (empty($_SESSION['ti'])) {

   echo "<script type'text/javascript'>window.location='404.html' </script>";


} else { ?>


    <?php include 'header.php'; ?>
    <?php include 'conexion.php'; ?>
    <?php  ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <h5>Pagina principal </h5>
          </li>

        </ol>

        <!-- Icon Cards-->


        <!-- Area Chart Example-->
          <?php if ($_GET['id'] == 'maestros'){ ?>
            <?php if ($_SESSION['ti'] == 1): ?>


            <!-- DataTables Example -->
            <?php
            $sql = "SELECT e.tip tipo, e.nom nombre1, m.cp clave, m.nom nombre, m.ape_pa apelldio
            FROM estadistica.alta_maestros m, estadistica.alta_escuelas e WHERE m.cdt = e.cdt_esc";
            $res = $conexion->query($sql); ?>
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Maestros registrados</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table hover table-bordered" id="tabla1" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>TIPO</th>
                        <th>ESCUELA</th>
                        <th>CLAVE PRESUPUESTAL</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>

                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>TIPO</th>
                        <th>ESCUELA</th>
                        <th>CLAVE PRESUPUESTAL</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>

                      </tr>
                    </tfoot>
                    <tbody>
                      <?php while($row =$res-> fetch_array(MYSQLI_ASSOC)){ ?>
                      <tr>
                        <td><?php echo $row['tipo']; ?></td>
                        <td><?php echo $row['nombre1']; ?></td>
                        <td><?php echo $row['clave']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apelldio']; ?></td>

                        

                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted"></div>
            </div>
            <?php endif; ?>
          <?php } ?>


          <?php if ($_GET['id'] == 'escuela'){ ?>
            <?php if ($_SESSION['ti'] == 1): ?>


            <!-- DataTables Example -->
            <?php
            $sql = "select * from alta_escuelas ";
            $res = $conexion->query($sql); ?>
            <div class="card mb-3 shadow">
              <div class="card-header">
                <i class="fas fa-table"></i>

                Escuelas registradas</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="tabla3" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>CCT</th>
                        <th>TIPO</th>
                        <th>Nombre</th>
                        <th>DOMICILIO</th>
                        <th>LOCALIDAD</th>

                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>CCT</th>
                        <th>TIPO</th>
                        <th>Nombre</th>
                        <th>DOMICILIO</th>
                        <th>LOCALIDAD</th>

                      </tr>
                    </tfoot>
                    <tbody>
                      <?php while($row =$res-> fetch_array(MYSQLI_ASSOC)){ ?>
                      <tr>
                        <td><?php echo $row['cdt_esc']; ?></td>
                        <td><?php echo $row['tip']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['dom']; ?></td>
                        <td><?php echo $row['loc']; ?></td>



                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted"></div>
            </div>
            <?php endif; ?>
          <?php } ?>


          <?php if ($_GET['id'] == 'alumnos'){ ?>
            <?php if ($_SESSION['ti'] == 2 || $_SESSION['ti'] == 1): ?>


            <!-- DataTables Example -->
            <?php
            if ($_SESSION['ti'] == 1) {
              $sql = "SELECT a.folio, e.nom escuela, a.gra grado,a.gru grupo,a.nom nom, a.ape ape,a.eda edad,a.sex sex,a.cur cur
              FROM estadistica.alta_escuelas e, estadistica.altas_alumnos a where e.cdt_esc = a.cdt_esc order by grado asc";
              // code...
            }else {
              $id=$_SESSION['id'];
              $sql="SELECT a.folio folio, e.nom escuela, a.gra grado,a.gru grupo,a.nom nom, a.ape ape,a.eda edad,a.sex sex,a.cur cur
              FROM estadistica.alta_escuelas e, estadistica.altas_alumnos a where e.cdt_esc = a.cdt_esc and id_mae = '$id' order by grado asc";
              // code...
            }
            $res = $conexion->query($sql); ?>


            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Alumnos registrados</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="tabla3" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Escuela</th>
                        <th>Grado</th>
                        <th>Grupo</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Sexo</th>
                        <th>OPCIONES</th>

                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Escuela</th>
                        <th>Grado</th>
                        <th>Grupo</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Sexo</th>
                        <th>OPCIONES</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php while($row =$res-> fetch_array(MYSQLI_ASSOC)){ ?>
                        <?php


                            $datos= $row['folio']."||".
                              $row['nom']."||".
                              $row['ape']."||".
                              $row['edad']."||".
                              $row['cur'];
                            // code...


                         ?>
                      <tr>
                        <td><?php echo $row['escuela']; ?></td>
                        <td><?php echo $row['grado']; ?></td>
                        <td><?php echo $row['grupo']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['ape']; ?></td>
                        <td><?php echo $row['sex']; ?></td>
                        <td>
                          <div class="dropdown dropleft">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              MÁS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="editar_alumnos('<?php echo $datos; ?>')" href="#editar_alumnos">EDITAR</a>



                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted"></div>
            </div>
              <?php endif; ?>
          <?php } ?>



      </div>
      <!-- /.container-fluid -->



    </div>
    <!-- /.content-wrapper -->
    <?php include 'footer.php'; ?>
    <?php } ?>
