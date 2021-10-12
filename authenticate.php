<?php

session_start();

$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'ibis_praksa';

// Create connection to the database
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    $arr['error'] = 'Failed to connect to MySQL: ' . mysqli_connect_error();
    $arr['message'] = '';
    echo json_encode($arr, 256);
}

// Read raw data from the request body
$a = file_get_contents("php://input");

// Decode data from jason to a variable
$text = json_decode($a);

// Check for the name and password in the text object
if (isset($text->name) && isset($text->password)) {

    // Set username and password to the name and password read from the text object
    $username = $text->name;
    $password = $text->password;

    // Check if the username and password variables are empty and start a query to the database
    if ($username != '' && $password != '') {
        $sql = "SELECT * FROM users where name ='{$username}'";
        $res = mysqli_query($con, $sql);

        // Check if the database is not empty
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);

            // Check the hashed password
            if (password_verify($password, $row['password'])) {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $arr['error'] = '';
                $arr['message'] = 'index.php';
            } else {
                // Message shown if the password is wrong
                $arr['error'] = 'Wrong password!';
            }
        } else {
            // Message shown if the user doesn't exist in the database
            $arr['error'] = 'User does not exist!';
        }
    } else {
        // Message shown is a user tries to submit empty form
        $arr['error'] = 'Fields cannot be empty!';
    }
} else {
    $arr['error'] = 'Please fill all the fields!';
    $arr['message'] = '';
}

echo json_encode($arr, 256);
