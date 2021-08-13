<?php
session_start();
if (isset($_SESSION['user'])) {
	unset($_SESSION['user']);
	unset($_SESSION['admin']);
	header("Location: ../site");
	session_destroy();
} elseif (isset($_SESSION['admin'])) {
	unset($_SESSION['admin']);
	unset($_SESSION['user']);
	header("Location: ../site");
    session_destroy();
}
?>

