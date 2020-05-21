<?php
session_start();

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

echo "Session nama dan user_id sudah di clear. Logout OK";
header("Location: index.php");

// Kevin Widjaja 00000027219
