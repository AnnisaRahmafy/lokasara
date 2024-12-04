<?php
session_start();

// Simpan data inputan form ke session
$_SESSION['order_data'] = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'address' => $_POST['address'],
    'location' => $_POST['location'],
    'guests' => $_POST['guests'],
    'arrivals' => $_POST['arrivals'],
    'leaving' => $_POST['leaving'],
];

// Redirect ke halaman summary
header("Location: summary.php");
exit;
?>
