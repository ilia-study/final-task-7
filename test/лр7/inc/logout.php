<?php
session_start();
unset($_SESSION['user_login']);
unset($_SESSION['full_name']);
header('Location: ../index.php');