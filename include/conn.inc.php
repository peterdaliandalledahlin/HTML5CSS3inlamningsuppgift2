<?php

    $hostname = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbDatabase = "inlamningsuppgift";

    // Skapar uppkopplingen
    $conn = new mysqli($hostname, $dbUser, $dbPassword, $dbDatabase);
    // Kollar uppkopplingen
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>