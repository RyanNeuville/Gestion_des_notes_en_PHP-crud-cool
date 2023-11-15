<?php
    include_once "connect.php";
    $id = $_GET['id'];
    $sql = " DELETE FROM `eleves` WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Eleves Supprimer Avec Succes");
    } else {
        echo "Failed: " . mysqli_error($conn);
    } 
?>