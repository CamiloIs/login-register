<?php
include("bd.php");
$title = '';
$description= '';
$responsable= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM task WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $description = $row['description'];
    $responsable = $row['responsable'];
    $plazo = $row['plazo'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['title'];
  $description = $_POST['description'];
  $responsable= $_POST['responsable'];
  $plazo= $_POST['plazo'];

  $query = "UPDATE task set title = '$title', description = '$description' WHERE id=$id";
  mysqli_query($conn, $query);
  $query = "UPDATE task set responsable = '$responsable', description = '$description' WHERE id=$id";
  mysqli_query($conn, $query);
  $query = "UPDATE task set plazo = '$plazo', description = '$description' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index2.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="title" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="Actualizar tarea">
        </div>
        <div class="form-group">
          <input name="responsable" type="text" class="form-control" value="<?php echo $responsable; ?>" placeholder="Responsable">
          </div>
        <div class="form-group">
          <input name="plazo" type="datetime" class="form-control" value="<?php echo $plazo; ?>" placeholder="Plazo">
          </div>  
        <div class="form-group">
        <textarea name="description" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
