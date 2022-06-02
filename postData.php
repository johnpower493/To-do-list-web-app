<?php
// Add a new task to todo.json when the button is pressed
if (isset($_POST['task'])) {
    $task = $_POST['task'];
    $tasks = file_get_contents('todo.json');
    $tasks = json_decode($tasks, true);
    $tasks[] = $task;
    $tasks = json_encode($tasks);
    file_put_contents('todo.json', $tasks);
    // redirect to index.php
    header('Location: index.php');
}