<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));


    if (!empty($name) && !empty($email) && !empty($message)) {

        $sql = "INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)";


        if ($stmt = $conn->prepare($sql)) {

            $stmt->bind_param("sss", $name, $email, $message);


            if ($stmt->execute()) {
                echo "Thank you for your message! We will get back to you shortly.";
            } else {
                echo "There was an error saving your message. Please try again later.";
            }


            $stmt->close();
        } else {
            echo "Error preparing the query.";
        }
    } else {
        echo "All fields are required.";
    }
}


$conn->close();


