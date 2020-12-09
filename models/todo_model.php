<?php

include(__DIR__ . '/../db.php');

function createTodo($title, $task)
{
  $conn = connDb();
  $sql = "INSERT INTO todos (title, task, done) VALUES (:title, :task, :done);";
  $stmt = $conn->prepare($sql);
  $stmt->execute(['title' => $title, 'task' => $task, 'done' => 0])
}