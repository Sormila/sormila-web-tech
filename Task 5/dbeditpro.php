<?php
    include 'Connection.php';

    
    function update($fname, $lname, $gender, $dob, $religion, $phone, $email, $username)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE REG SET fname = ?, lname= ?, gender= ?, dob= ?, religion= ?, phone= ? , email= ? WHERE username = ?");
    $stmt->bind_param("ssssssss",$fname, $lname, $gender, $dob, $religion, $phone, $email, $username);
     return $stmt->execute();
    }

?>