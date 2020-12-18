<?php

include(__DIR__ . '/../db.php');

function createTodo($title, $task)
{
  $pdo = connDb();
  $sql = "INSERT INTO todos (title, task, done) VALUES (:title, :task, :done);";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['title' => $title, 'task' => $task, 'done' => 0]);
}

function showTodo($title, $task)
{
  $pdo = connDb();
  $sql = "SELECT * FROM todos WHERE id = :id;";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['id' => $id]);
  $todos = $stmt->fetchAll();
  return $todos;
}

function deleteTodo($id)
{
  $pdo = connDb();
  $sql = "DELETE FROM todos WHERE id = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['id' => $id]);
  $todos = $stmt->delete();
  return $todos;
}