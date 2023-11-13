<?php

include('db.php');

if (isset($_POST['saveTask'])) {
  $estado = $_POST['estado'];
  $ciudad = $_POST['ciudad'];
  $codigoP = $_POST['codigoP'];
  $zonaH = $_POST['zonaH'];
  $colonia = $_POST['colonia'];
  $nomCalle = $_POST['nomCalle'];
  $numCalle = $_POST['numCalle'];
  $query = "INSERT INTO ubicacion(id, estado, ciudad, codigoP, zonaH, colonia, nomCalle, numCalle) VALUES ('$id', '$estado', '$ciudad', '$codigoP', '$zonaH', '$colonia', '$nomCalle', '$numCalle')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>