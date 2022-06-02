<?php  

// Delete a task from todo.json when the button is pressed
if (isset($_GET['task'])) {
    $task = $_GET['task'];
    $tasks = file_get_contents('todo.json');
    $tasks = json_decode($tasks, true);
    $key = array_search($task, $tasks);
    unset($tasks[$key]);
    $tasks = json_encode($tasks);
    file_put_contents('todo.json', $tasks);
    // redirect to index.php
    header('Location: index.php');
}