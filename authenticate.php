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

// Check for the email and password in the text object
if (isset($text->email) && isset($text->password)) {

    // Set email and password to the name and password read from the text object
    $email = $text->email;
    $password = $text->password;

    // Check if the email and password variables are empty and start a query to the database
    if ($email != '' && $password != '') {
        $sql = "SELECT * FROM users where email ='{$email}'";
        $res = mysqli_query($con, $sql);

        // Check if the database is not empty
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);

            // Check the hashed password
            // (password for both users in the database is: test)
            if (password_verify($password, $row['password'])) {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $row['email'];
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
