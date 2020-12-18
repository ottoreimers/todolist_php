<?php

require_once 'app/init.php';

if (isset($_GET['as'], $_GET['name'])) {
  $as = $_GET['as'];
  $item = $_GET['name'];

  switch ($as) {
    case 'done':
      $doneQuery = $db->prepare("
      UPDATE todo
      SET done = 1
      WHERE id = :name
      AND user_id = :user_id");

      $doneQuery->execute([
        'name' => $item,
        'user_id' => $_SESSION['user_id']
      ]);
      break;

      case 'notdone':
        $notDoneQuery = $db->prepare("
        UPDATE todo
        SET done = 0
        WHERE id = :name
        AND user_id = :user_id");

        $notDoneQuery->execute([
          'name' => $item,
          'user_id' => $_SESSION['user_id']
        ]);
        break;
  }
}
header ('Location: index.php');