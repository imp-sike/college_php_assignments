<?php
require_once("connection.php");

print_r($_GET);

if (isset($_GET["taskTitle"]) && isset($_GET["taskDescription"])) {
  $taskTitle = $_GET["taskTitle"];
  $taskDescription = $_GET["taskDescription"];
  $taskStatus = 0; // status is false by default


  $sql = "INSERT INTO tasks (title, contents, status) VALUES ('$taskTitle', '$taskDescription', $taskStatus)";

  if ($mysqli->query($sql) === TRUE) {
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
} else {
  echo "Task not appropriate to add.";
}
