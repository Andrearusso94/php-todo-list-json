<?php

$todo_string = file_get_contents('todo.json');
$todo = json_decode($todo_string, true);


header('Content-Type: application/json');
echo $todo_string;
