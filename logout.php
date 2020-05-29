<?php
header("Location: index.php");
session_start();

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

// Kevin Widjaja 00000027219
