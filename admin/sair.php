<?php
session_start();

unset($_SESSION['id_user']);
unset($_SESSION['nome']);
unset($_SESSION['tipo']);
unset($_SESSION['loggedIn']);

header("Location: ../index.php")
?>