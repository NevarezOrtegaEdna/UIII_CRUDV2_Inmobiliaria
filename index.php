<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MENSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="saveTask.php" method="POST">
          <div class="form-group">
            <input type="text" name="estado" class="form-control" placeholder="Estado" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="ciudad" class="form-control" placeholder="Ciudad"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="codigoP" class="form-control" placeholder="Codigo Postal"></textarea>
          </div>
          <div class="form-group">
            <input type="time" name="zonaH" class="form-control" placeholder="Zona Horaria"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="colonia" class="form-control" placeholder="Colonia"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="nomCalle" class="form-control" placeholder="Nombre de Calle"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="numCalle" class="form-control" placeholder="Numero de Calle"></textarea>
          </div>
          <input type="submit" name="saveTask" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Estado</th>
            <th>Ciudad</th>
            <th>Codigo Postal</th>
            <th>Zona Horaria</th>
            <th>Colonia</th>
            <th>Nombre de Calle</th>
            <th>Numero de Calle</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM ubicacion";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['estado']; ?></td>
            <td><?php echo $row['ciudad']; ?></td>
            <td><?php echo $row['codigoP']; ?></td>
            <td><?php echo $row['zonaH']; ?></td>
            <td><?php echo $row['colonia']; ?></td>
            <td><?php echo $row['nomCalle']; ?></td>
            <td><?php echo $row['numCalle']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="deleteTask.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>