<?php

include(__DIR__ . '/controllers/todo_control.php');

handleDeleteTodo();

header("Location: /u04");
