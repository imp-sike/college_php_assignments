<?php
require_once("connection.php");

print_r($_GET);

if (isset($_GET["id"])) {
  $taskId = $_GET["id"];


  $sql = "DELETE FROM tasks WHERE id=$taskId";

  if ($mysqli->query($sql) === TRUE) {
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
} else {
  echo "Task not appropriate to delete.";
}
