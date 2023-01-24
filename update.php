<!DOCTYPE html>
<head>
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    include_once "config.php";
    
    $id = $_GET['edit'];
    $tasksData = mysqli_query($db, "SELECT * FROM tasks WHERE id = $id");
    $data = mysqli_fetch_array($tasksData);
?>
<body>
    <div class="heading">
		<h2>Update task</h2>
	</div>

	<form method="POST" action="update1.php">
		<input type="text" name="task" value="<?php echo $data['task'] ?>" class="task_input">
		<button type="submit" class="add_btn" name="submit">Update</button>
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
	</form>
</body>
</html>