<?php

  // Get the connection to the database
  $host = 'localhost';
  $user = 'kelii';
  $pwd = 'kelii30';
  $dbname = 'hospital';

  $conn = new mysqli($host, $user, $pwd, $dbname);

  if ($conn->connect_error) {
    die("Failed connection: " . $conn->connect_error);
  }