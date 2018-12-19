<?php

include "include/conn.inc.php";

$firstname = $lastname = $street = $zipcode = $city = $phone = $email = $type = "";

// När man trycker på knappen
if(isset($_POST["sign_up_button"])) {

//laddar in namnet på input-formuläret till en variabel
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $street = $_POST['Street'];
    $zipcode = $_POST['ZipCode'];
    $city = $_POST['City'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $type = $_POST['Type'];
    
    $sql = "INSERT INTO persons (FirstName, LastName, Street, ZipCode, City, Phone, Email, Type)
    VALUES ('$firstname', '$lastname', '$street', '$zipcode', '$city', '$phone', '$email', '$type')";

    if ($conn->query($sql) === TRUE) {
        $msg = "Registreringen lyckades! Här nedan kan du välja att ta bort dig ur databasen genom att trycka på papperskorgen <i class='fas fa-trash-alt'></i> till höger!";
        //echo "Registreringen lyckades!";

    } else {
        echo "Något gick fel...: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
    //header('Refresh: 3; url=remove.php');
    $sql_query = "DELETE FROM persons WHERE ID = " .$_GET["ID"];

    mysqli_query($conn, $sql_query);
    mysqli_close($conn);

    //header("Location: table.php");
    header("Location: table.php?msg=".$msg);

} else {
    header("Location: index.html");
}


?>