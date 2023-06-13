<?php
    $ID = $_POST['ID'];
    $firstName = $_POST['firstName'];
    $lastName= $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
   // Database connection
   $conn = new mysqli('localhost','root','root','registration_form2');
   if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
   } else {
    $stmt = $conn->prepare("INSERT INTO registration(ID, firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi",$ID, $firstName, $lastName, $gender, $email, $password, $number);
    $stmt->execute();
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
