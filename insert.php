<?php
$errors = "";

if (isset($_POST['submit'])) {
        $task = $_POST['task'];
        if(empty($task)) {
            $errors = "You must fill in the task!";
        } else { 
            mysqli_query($db, "INSERT INTO tasks (task) VALUES ('$task')");
            header('location: index.php');
        }
    }
?>