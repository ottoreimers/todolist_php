<?php

  function regTodo()
  {

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="style.sass">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <title>ToDo list</title>
</head>
<body>
  <h1 id="header">Todo</h1>
    <form method="POST" action="create_todo.php">
      <input type="text" name="title" class="form-control" placeholder="Title" aria-label="First name" required>
      <input type="text" name="task" class="form-control" placeholder="Task" aria-label="Task name" required>
      <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
    </form>
    <form method="GET" actions="delete_todo.php">
      <select name="id" id="delete">
      <option value="id">
        <?php
          echo $id = $_GET['id'];
        ?>
      </option>
      </select>
      <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
    </form>
    <?php
    include 'second.php';
    ?>

</body>
</html>
<?php
 };
?>