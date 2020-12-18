<?php

require_once 'app/init.php';

if (isset($_POST['task'], $_POST['name'])) {
  $task = trim($_POST['task']);
  $name = trim($_POST['name']);

  if (!empty($name)) {
    $addedQuery = $db->prepare("
    INSERT INTO todo (task, name, user_id, done, created)
    VALUES (:task, :name, :user_id, 0, NOW())");

    $addedQuery->execute([
      'task' => $task,
      'name' => $name,
      'user_id' => $_SESSION['user_id']
    ]);
  }
}

header('Location: index.php');