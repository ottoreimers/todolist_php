<?php

include(__DIR__ . '/controllers/todo_control.php');

handleCreateTodo();

header("Location: /u04");
