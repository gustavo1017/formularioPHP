<?php

// if (!$_POST) {
//   // code...
//   header('Location: http://localhost:8081/curso_php/formularios/index.php');
// }
//
//   $nombre = $_POST['nombre'];
//   $sexo = $_POST['sexo'];
//   $year = $_POST['year'];
//   $terminos = $_POST['terminos'];
//
//   echo 'Hola, '.$nombre . ' eres '. $sexo;

//print_r($_POST);

//print_r($_GET);

$nombre = $_GET['nombre'];
echo htmlspecialchars($nombre);

if (!$_GET) {
header('Location: http://localhost:8081/curso_php/formularios/index.php');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

if ($nombre) {
  // code...
  echo $nombre . '<br>';
}else{
  echo "El usuario no establecio nombre <br>";
}



 ?>
