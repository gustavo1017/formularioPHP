<?php
$errores ='';
if (isset($_POST['submit'])) {
  // code...
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];

  if (!empty($nombre)) {
    // code...
    // $nombre = trim($nombre);
    // $nombre = htmlspecialchars($nombre);
    // $nombre = stripslashes($nombre);
    $nombre  =  filter_var($nombre, FILTER_SANITIZE_STRING);
    echo "tu nombre es: $nombre <br>";
  }else {
      $errores .= 'Por favor agrega un nombre <br>';
  }

  if (!empty($correo)) {
    // code...
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
    if (!filter_var($correo, FILTER_SANITIZE_EMAIL)) {
      // code...
      $errores.='Por favor ingresa un correo valido<br>';
    }
    else {
      // code...
        echo "tu correo es: $correo";
    }

  }else {
    // code...
    $errores .= 'Por favor agrega un correo';
  }

  echo "Tu correo es: $correo";
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <style media="screen">
      .error{
        color: red;
      }
    </style>
  </head>
  <body>
    <form  action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="post" name="">
        <input type="text" name="nombre" value=""placeholder="nombre:">
        <br>
        <input type="email" name="correo" value=""placeholder="correo:">
        <br>
        <?php if (!empty($errores)):  ?>
          <div class="error">
            <?php echo $errores; ?>
          </div>
        <?php endif;  ?>
        <input type="submit" name="submit" value="">
    </form>
  </body>
</html>
