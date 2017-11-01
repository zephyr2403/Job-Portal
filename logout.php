<?php
include_once 'resources/session.php';
session_destroy();
header('location:login.php');
?>
