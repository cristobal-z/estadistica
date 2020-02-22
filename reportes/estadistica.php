<?php

//if (isset($_GET['estadisticas'])) {
  // code...


//  $mat= $_GET['mat'];
 $cct= $_GET['cdt'];
//  $grado= $_GET['grado'];
  require 'header.php';
  require '../conexion.php';

  $sql1="SELECT * FROM estadistica.alta_escuelas WHERE cdt_esc ='$cct'";
  $bus1 = $conexion->query($sql1);
  $row = mysqli_fetch_array($bus1);

  if ($row['tip'] =='PRIMARIA') {
    $sql ="SELECT gra,gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 1 and gru = 'A' and cdt_esc = '$cct') - count(sex
    ) ninos, (select count(*) FROM estadistica.altas_alumnos where gra = 1 and gru = 'A' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 1 and gru = 'A' and cdt_esc = '$cct' union


      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 1 and gru = 'B' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 1 and gru = 'B' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 1 and gru = 'B' and cdt_esc = '$cct' union

      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 2 and gru = 'A' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 2 and gru = 'A' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 2 and gru = 'A' and cdt_esc = '$cct'  union

      SELECT gra, gru grupo,count(*)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 2 and gru = 'B' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 2 and gru = 'B' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 2 and gru = 'B' and cdt_esc = '$cct' union

      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 3 and gru = 'A' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 3 and gru = 'A' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 3 and gru = 'A' and cdt_esc = '$cct' union

      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 3 and gru = 'B' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 3 and gru = 'B' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 3 and gru = 'B' and cdt_esc = '$cct' union

      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 4 and gru = 'A' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 4 and gru = 'A' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 4 and gru = 'A' and cdt_esc = '$cct' union

      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 4 and gru = 'B' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 4 and gru = 'B' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 4 and gru = 'B' and cdt_esc = '$cct' union

      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 5 and gru = 'A' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 5 and gru = 'A' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 5 and gru = 'A' and cdt_esc = '$cct' union

      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 5 and gru = 'B' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 5 and gru = 'B' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 5 and gru = 'B' and cdt_esc = '$cct' union

      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 6 and gru = 'A' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 6 and gru = 'A' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 6 and gru = 'A' and cdt_esc = '$cct' union

      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 6 and gru = 'B' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 6 and gru = 'B' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 6 and gru = 'B' and cdt_esc = '$cct'";


      $bus = $conexion->query($sql) OR die(mysqli_error($conexion));


        $sql2 ="SELECT  (select count(*) from estadistica.altas_alumnos where  sex='femenino' and
        cdt_esc ='$cct' ) ninas_t, (select count(*) from estadistica.altas_alumnos where  sex='masculino' and
        cdt_esc ='$cct' ) ninos_t, count(*) total_t FROM estadistica.altas_alumnos WHERE cdt_esc ='$cct' ";
        $bus2 = $conexion->query($sql2);
        $row1 = mysqli_fetch_array($bus2);


      $pdf = new PDF('P');
      $pdf-> AddPage();

      $pdf->SetFillColor(232,232,232);
      $pdf->SetXY(40,30);
      $pdf->Cell(8,2,utf8_decode(' EDUCACION'.' '.$row['tip']),0,0,'C',0);
      $pdf->SetFont('Arial','',12);
      $pdf->SetXY(25,40);
      $pdf->Cell(10,7,utf8_decode('DATOS DE LA ESCUELA'),0,0,'C',0);
      $pdf->SetXY(30,55);
      $pdf->Cell(10,7,utf8_decode('_____________________'),0,0,'C',0);
      $pdf->Cell(30,7,utf8_decode($row['cdt_esc']),0,0,'L',0);
      $pdf->SetXY(25,60);
      $pdf->Cell(10,7,utf8_decode('Clave'),0,0,'C',0);


      $pdf->SetXY(90,55);
      $pdf->Cell(10,7,utf8_decode('_______________________________'),0,0,'C',0);
      $pdf->Cell(10,7,utf8_decode(''),0,0,'R',0);
      $pdf->SetXY(90,60);
      $pdf->Cell(70,7,utf8_decode('Nombre'),0,0,'C',0);

      $pdf->SetXY(165,55);
      $pdf->Cell(10,7,utf8_decode('_________________________________'),0,0,'C',0);
      $pdf->Cell(10,7,utf8_decode($row['nom']),0,0,'R',0);
      $pdf->SetXY(155,60);
      $pdf->Cell(10,7,utf8_decode(''),0,0,'C',0);


      $pdf->SetXY(45,85);
      $pdf->Cell(10,7,utf8_decode('_____________________________'),0,0,'C',0);
      $pdf->Cell(10,7,utf8_decode($row['tip']),0,0,'R',0);
      $pdf->SetXY(25,90);
      $pdf->Cell(10,7,utf8_decode('Tipo'),0,0,'C',0);


      $pdf->SetXY(90,85);
      $pdf->Cell(10,7,utf8_decode('________________________________'),0,0,'C',0);
      $pdf->Cell(10,7,utf8_decode($row['dom']),0,0,'R',0);
      $pdf->SetXY(90,90);
      $pdf->Cell(10,7,utf8_decode('Domicilio'),0,0,'C',0);

      $pdf->SetXY(165,85);
      $pdf->Cell(10,7,utf8_decode('________________________________'),0,0,'C',0);
      $pdf->Cell(10,7,utf8_decode($row['loc']),0,0,'R',0);
      $pdf->SetXY(155,90);
      $pdf->Cell(10,7,utf8_decode('Localidad'),0,1,'C',0);


      $pdf->SetFont('Arial','',12);
      $pdf->SetXY(45,125);
      $pdf->Cell(25,7,utf8_decode('GRADO'),1,0,'C',1);
      $pdf->Cell(25,7,utf8_decode('GRUPO'),1,0,'C',1);
      $pdf->Cell(25,7,utf8_decode('NIÑAS'),1,0,'C',1);
      $pdf->Cell(25,7,utf8_decode('NIÑOS'),1,0,'C',1);
      $pdf->Cell(25,7,utf8_decode('TOTAL'),1,1,'C',1);

      $pdf->SetXY(45,132);
      $pdf->Cell(25,14,utf8_decode('PRIMERO'." "),1,0,'C',0);

      while ($fila= $bus-> fetch_array(MYSQLI_ASSOC)) {
      $pdf->SetX(70);
      $pdf->Cell(25,7,utf8_decode($fila['grupo']),1,0,'C',0);
      $pdf->Cell(25,7,utf8_decode($fila['Ninas']),1,0,'C',0);
      $pdf->Cell(25,7,utf8_decode($fila['ninos']),1,0,'C',0);
      $pdf->Cell(25,7,utf8_decode($fila['Total']),1,1,'C',0);

      }

      $pdf->SetXY(45,146);
      $pdf->Cell(25,14,utf8_decode('SEGUNDO'." "),1,0,'C',0);


      $pdf->SetXY(45,160);
      $pdf->Cell(25,14,utf8_decode('TERCERO'." "),1,0,'C',0);

      $pdf->SetXY(45,174);
      $pdf->Cell(25,14,utf8_decode('CUARTO'." "),1,0,'C',0);

      $pdf->SetXY(45,188);
      $pdf->Cell(25,14,utf8_decode('QUINTO'." "),1,0,'C',0);


      $pdf->SetXY(45,202);
      $pdf->Cell(25,14,utf8_decode('SEXTO'." "),1,0,'C',0);



      $pdf->SetXY(45,216);
      $pdf->SetFont('Arial','B',12);
      $pdf->Cell(50,7,utf8_decode('TOTALES'),1,0,'C',0);
      $pdf->Cell(25,7,utf8_decode($row1['ninas_t']),1,0,'C',0);
      $pdf->Cell(25,7,utf8_decode($row1['ninos_t']),1,0,'C',0);
      $pdf->Cell(25,7,utf8_decode($row1['total_t']),1,1,'C',0);



  } if($row['tip'] =='PREESCOLAR') {
    $sql ="SELECT gra,gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 1 and gru = 'A' and cdt_esc = '$cct') - count(sex
    ) ninos, (select count(*) FROM estadistica.altas_alumnos where gra = 1 and gru = 'A' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 1 and gru = 'A' and cdt_esc = '$cct' union


      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 1 and gru = 'B' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 1 and gru = 'B' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 1 and gru = 'B' and cdt_esc = '$cct' union

      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 2 and gru = 'A' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 2 and gru = 'A' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 2 and gru = 'A' and cdt_esc = '$cct'  union

      SELECT gra, gru grupo,count(*)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 2 and gru = 'B' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 2 and gru = 'B' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 2 and gru = 'B' and cdt_esc = '$cct' union

      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 3 and gru = 'A' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 3 and gru = 'A' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 3 and gru = 'A' and cdt_esc = '$cct' union

      SELECT gra, gru grupo,count(sex)Ninas,(select count(*) FROM estadistica.altas_alumnos where gra = 3 and gru = 'B' and cdt_esc = '$cct') - count(sex
      ) ninos,(select count(*) FROM estadistica.altas_alumnos where gra = 3 and gru = 'B' and cdt_esc = '$cct')
      Total  FROM estadistica.altas_alumnos
      where sex ='femenino' and gra = 3 and gru = 'B' and cdt_esc = '$cct' ";


      $bus = $conexion->query($sql) OR die(mysqli_error($conexion));


        $sql2 ="SELECT  (select count(*) from estadistica.altas_alumnos where  sex='femenino' and
        cdt_esc ='$cct' ) ninas_t, (select count(*) from estadistica.altas_alumnos where  sex='masculino' and
        cdt_esc ='$cct' ) ninos_t, count(*) total_t FROM estadistica.altas_alumnos WHERE cdt_esc ='$cct' ";
        $bus2 = $conexion->query($sql2);
        $row1 = mysqli_fetch_array($bus2);


      $pdf = new PDF('P');
      $pdf-> AddPage();

      $pdf->SetFillColor(232,232,232);
      $pdf->SetXY(40,30);
      $pdf->Cell(8,2,utf8_decode(' EDUCACION PREESCOLAR'),0,0,'C',0);
      $pdf->SetFont('Arial','',12);
      $pdf->SetXY(25,40);
      $pdf->Cell(10,7,utf8_decode('DATOS DE LA ESCUELA'),0,0,'C',0);
      $pdf->SetXY(30,55);
      $pdf->Cell(10,7,utf8_decode('_____________________'),0,0,'C',0);
      $pdf->Cell(30,7,utf8_decode($row['cdt_esc']),0,0,'L',0);
      $pdf->SetXY(25,60);
      $pdf->Cell(10,7,utf8_decode('Clave'),0,0,'C',0);


      $pdf->SetXY(90,55);
      $pdf->Cell(10,7,utf8_decode('_______________________________'),0,0,'C',0);
      $pdf->Cell(10,7,utf8_decode(''),0,0,'R',0);
      $pdf->SetXY(90,60);
      $pdf->Cell(70,7,utf8_decode('Nombre'),0,0,'C',0);

      $pdf->SetXY(165,55);
      $pdf->Cell(10,7,utf8_decode('_________________________________'),0,0,'C',0);
      $pdf->Cell(10,7,utf8_decode($row['nom']),0,0,'R',0);
      $pdf->SetXY(155,60);
      $pdf->Cell(10,7,utf8_decode(''),0,0,'C',0);


      $pdf->SetXY(45,85);
      $pdf->Cell(10,7,utf8_decode('_____________________________'),0,0,'C',0);
      $pdf->Cell(10,7,utf8_decode($row['tip']),0,0,'R',0);
      $pdf->SetXY(25,90);
      $pdf->Cell(10,7,utf8_decode('Tipo'),0,0,'C',0);


      $pdf->SetXY(90,85);
      $pdf->Cell(10,7,utf8_decode('________________________________'),0,0,'C',0);
      $pdf->Cell(10,7,utf8_decode($row['dom']),0,0,'R',0);
      $pdf->SetXY(90,90);
      $pdf->Cell(10,7,utf8_decode('Domicilio'),0,0,'C',0);

      $pdf->SetXY(165,85);
      $pdf->Cell(10,7,utf8_decode('________________________________'),0,0,'C',0);
      $pdf->Cell(10,7,utf8_decode($row['loc']),0,0,'R',0);
      $pdf->SetXY(155,90);
      $pdf->Cell(10,7,utf8_decode('Localidad'),0,1,'C',0);


      $pdf->SetFont('Arial','',12);
      $pdf->SetXY(45,125);
      $pdf->Cell(25,7,utf8_decode('GRADO'),1,0,'C',1);
      $pdf->Cell(25,7,utf8_decode('GRUPO'),1,0,'C',1);
      $pdf->Cell(25,7,utf8_decode('NIÑAS'),1,0,'C',1);
      $pdf->Cell(25,7,utf8_decode('NIÑOS'),1,0,'C',1);
      $pdf->Cell(25,7,utf8_decode('TOTAL'),1,1,'C',1);

      $pdf->SetXY(45,132);
      $pdf->Cell(25,14,utf8_decode('PRIMERO'." "),1,0,'C',0);

      while ($fila= $bus-> fetch_array(MYSQLI_ASSOC)) {
      $pdf->SetX(70);
      $pdf->Cell(25,7,utf8_decode($fila['grupo']),1,0,'C',0);
      $pdf->Cell(25,7,utf8_decode($fila['Ninas']),1,0,'C',0);
      $pdf->Cell(25,7,utf8_decode($fila['ninos']),1,0,'C',0);
      $pdf->Cell(25,7,utf8_decode($fila['Total']),1,1,'C',0);

      }

      $pdf->SetXY(45,146);
      $pdf->Cell(25,14,utf8_decode('SEGUNDO'." "),1,0,'C',0);


      $pdf->SetXY(45,160);
      $pdf->Cell(25,14,utf8_decode('TERCERO'." "),1,0,'C',0);





      $pdf->SetXY(45,174);
      $pdf->SetFont('Arial','B',12);
      $pdf->Cell(50,7,utf8_decode('TOTALES'),1,0,'C',0);
      $pdf->Cell(25,7,utf8_decode($row1['ninas_t']),1,0,'C',0);
      $pdf->Cell(25,7,utf8_decode($row1['ninos_t']),1,0,'C',0);
      $pdf->Cell(25,7,utf8_decode($row1['total_t']),1,1,'C',0);
  }




  //$fila = mysqli_fetch_array($bus);




/* while ($row = $res->fetch_array(MYSQLI_ASSOC)) {

$pdf->SetFont('Arial','',8);
$pdf->Cell(8,7,utf8_decode($row['no_cvo']),1 ,0,'C',0);
$pdf->Cell(22,7,utf8_decode($row['siniga']),1,0,'C',0);
$pdf->Cell(32,7,utf8_decode($row['muerte_rancho']),1,0,'C',0);
$pdf->Cell(35,7,utf8_decode($row['sacrificio_rastro']),1,0,'C',0);
$pdf->Cell(35,7,utf8_decode($row['vent_engor']),1,0,'C',0);
$pdf->Cell(12,7,utf8_decode($row['cesion']),1,0,'C',0);
$pdf->Cell(10,7,utf8_decode($row['robo']),1,0,'C',0);
$pdf->Cell(23,7,utf8_decode($row['vent_recria']),1,0,'C',0);
$pdf->Cell(15,7,utf8_decode($row['obs']),1,1,'C',0);

} */

//ob_start();
$pdf->OutPut();
  // code...
//}

 ?>
