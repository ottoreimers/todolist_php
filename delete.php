<?php

require_once 'app/init.php';

if (isset($_POST['name'])) {
  $task = $_POST['name'];

  $deleteQuery = $db->prepare("
    DELETE FROM todo
    WHERE name = 'name'");
}

header('Location: index.php');