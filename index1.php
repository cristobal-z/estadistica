<?php
  session_start();
 if (empty($_SESSION['ti'])) {

   echo "<script type'text/javascript'>window.location='404.html' </script>";


} else { ?>


    <?php include 'header.php'; ?>
    <?php include 'conexion.php'; ?>


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
        <?php
        $sql = "select * from alta_maestros ";
        $res = $conexion->query($sql); ?>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Plantilla de Maestros registrados</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="tabla1" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Clave de centro de trabajo</th>
                    <th>Clave presupuestal</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Curp</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Clave de centro de trabajo</th>
                    <th>Clave presupuestal</th>
                    <th>Nombre</th>
                    <th>Apellid</th>
                    <th>Correo</th>
                    <th>Curp</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php while($row =$res-> fetch_array(MYSQLI_ASSOC)){ ?>
                  <tr>
                    <td><?php echo $row['cdt']; ?></td>
                    <td><?php echo $row['cp']; ?></td>
                    <td><?php echo $row['nom']; ?></td>
                    <td><?php echo $row['ape_pa']; ?></td>
                    <td><?php echo $row['cor']; ?></td>
                    <td><?php echo $row['cur']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->



    </div>
    <!-- /.content-wrapper -->


<?php include 'footer.php'; ?>
<?php } ?>
