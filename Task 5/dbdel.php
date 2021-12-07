<?php
    include 'Connection.php';

    function del($id)
    {
    $conn = connect();
    $stmt = $conn->prepare("DELETE FROM BHISTORY WHERE id = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    }
?>