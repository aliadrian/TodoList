<?php
    include_once 'config.php';
    $Task = $_POST['task'];
    $ID = $_POST['id'];
    mysqli_query($db, "UPDATE `tasks` SET `task`='$Task' WHERE id = $ID");
    header("location: index.php");
?>