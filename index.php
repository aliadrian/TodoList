<?php 
	include_once 'config.php';
	include_once 'delete.php';
	include_once 'insert.php';

	$tasks = mysqli_query($db, "SELECT * FROM tasks");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>TodoList</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="heading">
		<h2>Todo list application with PHP and MySQL</h2>
	</div>

	<form method="POST" action="index.php">
		<?php if(isset($errors)) { ?>
			<p><?php echo $errors; ?></p>
		<?php } ?>
		<input type="text" name="task" class="task_input">
		<button type="submit" class="add_btn" name="submit">Add task</button>
	</form>

	<table>
		<thead>
			<th>N</th>
			<th>Task</th>
			<th>Action</th>
		</thead>

		<tbody>
			<?php $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
				<tr>
					<td><?php echo $i; ?></td>
					<td class="task"><?php echo $row['task']; ?></td>
					<td class="edit">
						<a href="update.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a>
					</td>
					<td class="delete">
						<a href="index.php?del_task=<?php echo $row['id']; ?>">X</a>
					</td>
				</tr>
			<?php $i++; } ?>
		</tbody>
	</table>
</body>
</html>