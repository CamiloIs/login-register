<?php


include('bd.php');
if (isset($_POST['save_task'])) {
  $responsable = $_POST['responsable'];
  $title = $_POST['title'];
  $plazo = $_POST['plazo'];
  $description = $_POST['description'];
  $query = "INSERT INTO task(title, description, responsable, plazo) VALUES ('$title', '$description', '$responsable', '$plazo')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index2.php');

}

?>
