<!DOCTYPE html>
<html>
<head>
	<title>ToDo List Application PHP and MySQL</title>
</head>
<body>
	<div>
		<h2>To Do List Application PHP and MySQL database</h2>
	</div>
	<form method="post" action="edit.php">
        <?php foreach ($results as $result) : ?>
		    <input type="text" name="work" value="<?php echo $result['workName']; ?>">
		    <button type="submit" name="submit">Update</button>
        <?php endforeach;?>
	</form>
</body>
</html>
