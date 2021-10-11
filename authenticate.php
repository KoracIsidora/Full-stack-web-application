<?php
session_start();

$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'ibis_praksa';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {

    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['password'])) {
    exit('Please fill all the fields!');
}

if ($stmt = $con->prepare('SELECT id, password FROM users WHERE name = ?')) {
    $stmt->bind_param('s', $_POST['name']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if (password_verify($_POST['password'], $password)) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['id'] = $id;
            header('Location: index.php');
        } else {
            echo "User does not exist!";
        }
    } else {
        echo "User does not exist!";
    }
    $stmt->close();
}
