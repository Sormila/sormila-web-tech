<?php
    include 'Connection.php';

    function reg($fname, $lname, $gender, $dob, $religion, $phone, $email, $username, $password)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO REG (fname, lname, gender, dob, religion, phone, email, username, password) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("sssssssss",$fname, $lname, $gender, $dob, $religion, $phone, $email, $username, $password);
     return $stmt->execute();

    }
?>