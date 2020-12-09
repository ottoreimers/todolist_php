<?php
  function regTodo()
  {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start</title>
</head>
<body>
  <h1>Att göra</h1>
    <form method="POST" action="create_todo.php">
      Titel<input type="text" name="title">
      Uppgift<textarea name="task" rows="4" cols="50"></textarea>
      <button type="submit">Lägg till</button>
      Klar<input type="checkbox">
    </form>
</body>
</html>
<?php
};
?>