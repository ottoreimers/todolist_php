<?php

function connDb()
{
  $host = 'localhost';
  $db = 'todolist';
  $user = 'root';
  $pass = 'root';
  $charset = 'utf8';

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

  $options = [PDO::ATTR_DEFAULT_MODE => PDO::FETCH_ASSOC];

}