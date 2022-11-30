<?php

$todo_string = file_get_contents('todo.json');
$todo_array = json_decode($todo_string, true);





if (isset($_POST['todo'])) {

    $todo = [
        'title' => $_POST['todo']
    ];

    array_push($todo_array, $todo);

    $json_todo = json_encode($todo_array);
    file_put_contents('todo.json', $json_todo);
}


header('Content-Type: application/json');
echo json_encode($todo_array);
