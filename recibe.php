<?php
//accede al metodo de envio
// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//   // code...
//   echo "Se enviaron por GET";
// }else {
//
//   echo "Se enviaron por metodo post";
// }

if (isset($_POST['submit'])) {
  // code...
  echo "Se han enviado los datos correctamente";
  print_r($_POST['submit']);
}

 ?>
