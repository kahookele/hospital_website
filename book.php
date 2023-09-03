<?php

  include('db.php');

  // Grab all information from form
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $number = $_POST["number"];
    $email = $_POST["email"];

    if (!$conn -> query("INSERT INTO bookings (firstname, lastname, number, email) VALUES ('$fname', '$lname', 'number', '$email')")) {
      echo("Error description: " . $conn->error);
    }
    else {
      echo "Your booking has been saved! Go back to view webpage.";
    }
  }