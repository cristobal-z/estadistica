<?php
  include '../conexion.php';
  session_start();
  if (isset($_POST['escuela'])) {
    $array = array(
      $_POST['cla'],
      $_POST['niv'],
      $_POST['nom'],
      $_POST['dom'],
      $_POST['ciu']
    );

    $cdt = $_POST['cla'];

    $sql1 = "SELECT count(*) from alta_escuelas where cdt_esc = '$cdt'";
    $encontrado = $conexion->query($sql1);
    $row=mysqli_fetch_assoc($encontrado);
    if ($row['count(*)'] == 1) {
      echo "<script> alert('Ya existe una escuela con el mismo CDT');</script>";
      echo "<script type'text/javascript'>window.location='../inicio.php' </script>";
      // code...
    }else {
      $sql= "insert into alta_escuelas values ('$array[0]','$array[1]','$array[2]','$array[3]','$array[4]')";
      $res = $conexion->query($sql) OR die('Error al insertar los datos'.mysqli_error($conexion));

      if($res){
            echo "<script> alert('Datos guardados');</script>";
            echo "<script type'text/javascript'>window.location='../inicio.php' </script>";

          }

    }


  }

  if (isset($_POST['login'])) {
    $cor = $_POST['cor'];
    $con = $_POST['con'];
    $rad = $_POST['radio'];

    if ($rad == 'admin') {
      $sql = "select cor,con,tip,nom from admin where cor ='$cor' and con ='$con'";
    }
    else {
      $sql = "select id_mae,cor,con,ifnull('maestro', tip) as tip,nom from alta_maestros where cor ='$cor' and con ='$con'";
    }
    $encontrado = $conexion->query($sql);
    $row = mysqli_fetch_assoc($encontrado);
    if ($row['cor'] == $cor and $row['con'] == $con) {

      if ($row['tip'] == 'admin') {
        $_SESSION['ti'] = 1;
        $in = $_SESSION['ti'];
        $_SESSION['nom'] = $row['nom'];
      } if ($row['tip'] == 'maestro') {
        $_SESSION['ti'] = 2;
        $_SESSION['nom'] = $row['nom'];
        $_SESSION['id'] = $row['id_mae'];
        $in = $_SESSION['ti'];
      }



      echo "<script> alert('Bienvenido ".$_SESSION['nom']."');</script>";
      echo "<script type'text/javascript'>window.location='../inicio.php' </script>";

      // code...
    }
    else {
       echo "<script> alert('Correo o contraseña incorrectas');</script>";
       echo "<script type'text/javascript'>window.location='../index.html' </script>";
    }

  }

  if (isset($_POST['maestros'])) {
    $are = array(
      $_POST['cdt'],
      $_POST['rfc'],
      $_POST['cur'],
      $_POST['cla'],
      $_POST['nom'],
      $_POST['ape'],
      $_POST['cor'],
      $_POST['pas'],
      $_POST['pa1']);

      $cdt =$are[0];


      $query ="SELECT count(*) FROM estadistica.alta_escuelas WHERE cdt_esc ='$cdt'";
      $excute = $conexion->query($query);
      $search = mysqli_fetch_assoc($excute);
      if ($search['count(*)'] ==1) {

        if ($are[7] == $are[8]) {
          $sql = "select cor from alta_maestros where cor = '$are[6]'";
          $encontrado = $conexion->query($sql);
          $row=mysqli_fetch_assoc($encontrado);

          $sql2 = "select cor from admin where cor = '$are[6]'";
          $encontrado2 = $conexion->query($sql2);
          $row2=mysqli_fetch_assoc($encontrado2);


          if ($row['cor']== $are[6] || $row2['cor'] == $are[6] ) {
            echo "<script> alert('El correo ".$are[6]." ya existe');</script>";
            echo "<script type'text/javascript'>window.location='../index.html' </script>";
          } else {
            $sql1 ="insert into alta_maestros (cdt,rfc,cur,cp,nom,ape_pa,cor,con) values ('$are[0]','$are[1]','$are[2]','$are[3]','$are[4]','$are[5]','$are[6]','$are[7]')";
            $res = $conexion->query($sql1) OR die('Error al insertar los datos' . mysqli_error($conexion));
            if ($res) {
              echo "<script> alert('Usuario registrado con exito');</script>";
              echo "<script type'text/javascript'>window.location='../index.html' </script>";
            }
          }
        }else {
          echo "<script> alert('No coinciden las contraseñas');</script>";
          echo "<script type'text/javascript'>window.location='../register.html' </script>";
        }

      }else {
        echo "<script> alert('No existe ninguna escuela con este CDT: ".$cdt."');</script>";
        echo "<script type'text/javascript'>window.location='../register.html' </script>";
      }



  }

  if (isset($_POST['alumnos'])) {
    $are = array(
      $_POST['cla'],
      $_POST['gra'],
      $_POST['gru'],
      $_SESSION['id'],
      $_POST['cic'],
      $_POST['nom'],
      $_POST['ape'],
      $_POST['eda'],
      $_POST['cur'],
      $_POST['sex']);

      $sql = "select cdt_esc from alta_escuelas where cdt_esc = '$are[0]'";
      $encontrado = $conexion->query($sql);
      $row=mysqli_fetch_assoc($encontrado);
      if ($row['cdt_esc']== $are[0]) {
        $sql1 = "insert into altas_alumnos (cdt_esc,gra,gru,id_mae,cic_esc,nom,ape,eda,cur,sex) values('$are[0]','$are[1]','$are[2]','$are[3]','$are[4]','$are[5]','$are[6]','$are[7]','$are[8]','$are[9]') ";
        $res = $conexion->query($sql1) OR die('Error al insertar los datos' . mysqli_error($conexion));
        if ($res) {
          echo "<script> alert('Alumno registrado con exito');</script>";
          echo "<script type'text/javascript'>window.location='../inicio.php' </script>";
        }
      }
      else {
        echo "<script> alert('La clave  ".$are[0]." no existe');</script>";
      }
  }

  if (isset($_POST['editar_alumnos'])) {
    $fol=$_POST['fol'];
    $nom=$_POST['nom'];
    $ape=$_POST['ape'];
    $eda=$_POST['eda'];
    $cur=$_POST['cur'];

    $sql1 = "UPDATE estadistica.altas_alumnos SET  nom ='$nom',ape ='$ape',eda='$eda',cur='$cur' WHERE folio ='$fol'";
    $res = $conexion->query($sql1) OR die('Error al insertar los datos' . mysqli_error($conexion));
    if ($res) {
      echo "<script> alert('Datos actualizados');</script>";
      echo "<script type'text/javascript'>window.location='../tablas.php?id=alumnos' </script>";
    }

    // code...
  }


  if (isset($_POST['editar_escuelas'])) {
    $cla=$_POST['cla'];
    $nom=$_POST['nom'];
    $dom=$_POST['dom'];
    $ciu=$_POST['ciu'];


    $sql1 = "UPDATE estadistica.alta_escuelas SET  nom ='$nom',dom ='$dom',loc='$ciu' WHERE cdt_esc ='$cla'";
    $res = $conexion->query($sql1) OR die('Error al insertar los datos' . mysqli_error($conexion));
    if ($res) {
      echo "<script> alert('Datos actualizados');</script>";
      echo "<script type'text/javascript'>window.location='../inicio.php' </script>";
    }

    // code...
  }



 ?>
