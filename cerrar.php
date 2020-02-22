<?php
if (isset($_GET['cerrar'])) {
  session_start();

  session_destroy();
  unset($_SESSION['ti']);
  echo "<script type'text/javascript'>window.location='index.html' </script>";

} else {
  echo "pagina no econtrada";
}


 ?>
