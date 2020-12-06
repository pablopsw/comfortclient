<?php
header('Content-Type: application/json');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  //$name = $_POST['nombre'];
  //if (empty($name)) {
   //  echo 'Se esta vacia';
  //} else {

    echo json_encode([
        "Nombre" => $_POST['name'],
        "Rut" => $_POST['rut'],
        "Email" => $_POST['email'],
        "Contraseña" => $_POST['password']
    ], true);

  //}
}


?>