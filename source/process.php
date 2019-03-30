<?php
    include 'connect.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM player_details WHERE player_id='$id'";

    if(mysqli_query($conn, $sql)){
        header("Location: viewprofile.php?action=delete");
    }
    else{
        echo "ERROR: " . $sql . "<br />" . mysqli_error($conn);
    }
?>