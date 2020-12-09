<?php
include(__DIR__ . '/../models/todo.php');

function handleCreateTodo() {
  $title = $_POST['title'];
  $task = $_POST['task'];

  createTodo($title, $task);
}