<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'app/init.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];


  if (isset($_POST['task'], $_POST['name'])) {
    $task = trim($_POST['task']);
    $name = trim($_POST['name']);
    try {
      $updateQuery = $db->prepare("UPDATE todo SET name=:name, task=:task WHERE id = :id");
      $updateQuery -> bindValue(':task', $task);
      $updateQuery -> bindValue(':name', $name);
      $updateQuery -> bindValue(':id', $id);
      $updateQuery->execute();
    }
    catch(PDOException $e) {
      echo $updateQuery . "<br>" . $e->getMessage();

  }

  }
}


header('Location: index.php');