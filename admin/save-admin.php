<?php

session_start();
include('connect.php');

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['username'];
$d = $_POST['password'];

$sql = "INSERT INTO table_admin (name, email, username, password) VALUES (:a, :b, :c, :d)";
$q = $db->prepare($sql);

if ($q) {
    $result = $q->execute(array(':a' => $a, ':b' => $b, ':c' => $c, ':d' => $d));

    if ($result) {
        header("location: add-admin.php?success=true");
    } else {
        header("location: add-admin.php?failed=true");
    }
} else {
    // Handle the case where the prepare statement failed
    header("location: add-admin.php?failed=true");
}
?>
