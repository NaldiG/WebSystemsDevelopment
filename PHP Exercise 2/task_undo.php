<?php
session_start();
$user_id = $_SESSION['user_id'];

require_once "connection.php";

$id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);

$db->exec("UPDATE tasks SET completed=0 WHERE id=$id AND user_id=$user_id");

header("Location: completed.php");
