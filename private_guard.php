<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['log']) || $_SESSION['log'] !== 'logged') {
    // Redirect to the login page
    header('Location: login.php');
    exit;
}
