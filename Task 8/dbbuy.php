<?php
    include 'Connection.php';



    function buy($id, $name, $amount, $mbank, $phone)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO BHISTORY (id, name, amount, mbank, phone) VALUES(?, ?, ?, ?, ?)");
     $stmt->bind_param("sssss",$id, $name, $amount, $mbank, $phone);
     return $stmt->execute();

    }

?>