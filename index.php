<!--Create a to do list using HTML CSS Bootstrap and PHP-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>To Do List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>To Do List</h1>
        <form action="postData.php" method="POST">
            <div class="form-group">
                <label for="task">Task</label>
                <input type="text" class="form-control" name="task">
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $tasks = file_get_contents('todo.json');
                $tasks = json_decode($tasks, true);
                foreach ($tasks as $task): ?>
                    <tr>
                        <td><?php echo $task; ?></td>
                        <td><a href="deleteData.php?task=<?php echo $task; ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>