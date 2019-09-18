<?php
session_start();
include 'start.php';
$users->deactivate($_SESSION['id']);
session_unset();
session_destroy();
header("location: ../index.php");