<?php
include("db.php");
$estado = '';
$ciudad= '';
$codigoP= '';
$zonaH= '';
$colonia= '';
$nomCalle= '';
$numCalle= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM ubicacion WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $estado = $row['estado'];
    $ciudad = $row['ciudad'];
    $codigoP = $row['codigoP'];
    $zonaH = $row['zonaH'];
    $colonia = $row['colonia'];
    $nomCalle = $row['nomCalle'];
    $numCalle = $row['numCalle'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $estado = $_POST['estado'];
  $ciudad = $_POST['ciudad'];
  $codigoP = $_POST['codigoP'];
  $zonaH = $_POST['zonaH'];
  $colonia = $_POST['colonia'];
  $nomCalle = $_POST['nomCalle'];
  $numCalle = $_POST['numCalle'];

  $query = "UPDATE ubicacion set estado = '$estado', ciudad = '$ciudad', codigoP = '$codigoP', zonaH = '$zonaH', colonia = '$colonia', nomCalle = '$nomCalle', numCalle = '$numCalle' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Actualizado con Exito';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <div class="form-group">
            <input type="text" name="estado" class="form-control" value="<?php echo $estado; ?>" placeholder="Estado" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="ciudad" class="form-control" value="<?php echo $ciudad; ?>" placeholder="Ciudad"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="codigoP" class="form-control" value="<?php echo $codigoP; ?>" placeholder="Codigo Postal"></textarea>
          </div>
          <div class="form-group">
            <input type="time" name="zonaH" class="form-control" value="<?php echo $zonaH; ?>" placeholder="Zona Horaria"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="colonia" class="form-control" value="<?php echo $colonia; ?>" placeholder="Colonia"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="nomCalle" class="form-control" value="<?php echo $nomCalle; ?>" placeholder="Nombre de Calle"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="numCalle" class="form-control" value="<?php echo $numCalle; ?>" placeholder="Numero de Calle"></textarea>
          </div>

        <button class="btn-success" name="update">
          update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>