<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>
</head>
<body>
    <form method="post" action="index.php" class="input_form">
        <input type="text" name="workName" class="task_input">
        <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Works</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result) : ?>
                <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['workName']; ?></td>
                    <td> 
                        <a href="index.php?delete=<?php echo $result['id'] ?>">x</a>
                        <a href="show.php?id=<?php echo $result['id'] ?>">Show</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>