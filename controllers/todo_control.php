<?php
include(__DIR__ . '/../models/todo_model.php');

function handleCreateTodo() {
  $title = $_POST['title'];
  $task = $_POST['task'];

  createTodo($title, $task);

}

function handleShowTodo() {
  $title = $_GET['title'];
  $task = $_GET['task'];
  $id = $_GET['id'];

}

function handleDeleteTodo() {
  $id = $_GET['id'];

  deleteTodo($id);
}