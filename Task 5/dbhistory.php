<?php
    include 'Connection.php';



    function getAllUsers()
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM BHISTORY");
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }
    function getUsers($bookid)
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM BHISTORY WHERE id = ?");
    $stmt->bind_param("s",$bookid);
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }

?>