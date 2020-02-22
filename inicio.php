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



            <!-- DataTables Example -->
            <?php
            if ($_SESSION['ti'] == 2) {
              $id= $_SESSION['id'];
              $sql = "SELECT e.cdt_esc cdt, e.tip tipo,e.nom nombre,e.dom domicilio, e.loc loc
              FROM estadistica.alta_maestros m, estadistica.alta_escuelas e  WHERE e.cdt_esc = m.cdt and m.id_mae = '$id' ";
            }else {
              $sql = "SELECT e.cdt_esc cdt, e.tip tipo,e.nom nombre,e.dom domicilio, e.loc loc
              FROM estadistica.alta_escuelas e";
            }
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
                        <th>OPCIONES</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>

                      </tr>
                    </tfoot>
                    <tbody>
                      <?php while($row =$res-> fetch_array(MYSQLI_ASSOC)){ ?>
                        <?php
                        $cdt= $row['cdt'];
                        $datos= $row['cdt']."||".
                          $row['tipo']."||".
                          $row['nombre']."||".
                          $row['domicilio']."||".
                          $row['loc'];

                         ?>
                      <tr>
                        <td><?php echo $row['cdt']; ?></td>
                        <td><?php echo $row['tipo']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['domicilio']; ?></td>
                        <td><?php echo $row['loc']; ?></td>

                        <td>
                          <?php if ($_SESSION['ti'] == 2) {  ?>
                            <div class="dropdown dropleft">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                MÁS
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item border-right-danger" data-toggle="modal" id="especialidad" onclick="agregar_alumos('<?php echo $cdt; ?>')" href="#alumnos">Agregar alumnos</a>
                                <div class="dropdown-divider"></div>




                              </div>
                            </div>
                          <?php } else {  ?>
                          <div class="dropdown dropleft">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              MÁS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item border-left-primary"  id="especialidad" onclick="agregarArete('<?php echo $id; ?>')" href="reportes/estadistica.php?cdt=<?php echo $cdt; ?>">Imprimir estadistica de alumnos</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="editar_escuelas('<?php echo $datos; ?>')" href="#editar_escuelas">Editar datos</a>



                            </div>
                          </div>
                        <?php } ?>
                        </td>

                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted"></div>
            </div>







      </div>
      <!-- /.container-fluid -->



    </div>
    <!-- /.content-wrapper -->
    <?php include 'footer.php'; ?>
  <?php } ?>
