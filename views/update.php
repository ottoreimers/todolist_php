<?php
echo "<input type='text' name='title' class='form-control' placeholder='Id' aria-label='Id number'>";
echo "<input type='text' name='title' class='form-control' placeholder='Name' aria-label='Person name'>";
echo "<input type='text' name='title' class='form-control' placeholder='Task' aria-label='Task name'>";
echo "<button type='submit'>Edit</button>";

function updated($value, $id) {

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todolist";

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "UPDATE todos SET title = ´{$value}´, task = ´{$value}´ WHERE id = ´{$id}´";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      if ($stmt->affected_rows > 0) {
        echo "updated";
      } else {
        echo "Error: ";
      }

}
include('second.php');