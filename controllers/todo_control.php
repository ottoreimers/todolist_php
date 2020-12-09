<?php
include(__DIR__ . '/../models/todo_model.php');

function handleCreateTodo() {
  $title = $_POST['title'];
  $task = $_POST['task'];

  createTodo($title, $task);
}