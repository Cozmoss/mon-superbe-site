<?php
include "db_connect.php";
session_start();
//ouvrir une connection avec le serveur de BD
$connection=get_connection();
if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $query= "DELETE FROM users WHERE Id=?";
        $statement=$connection->prepare($query);
        $statement->bind_param("i", $id);
        $statement->execute();
        $statement->close();
        $connection->close();
        $_SESSION['message']= "suppression réussie";
        $_SESSION['msg_type'] ="danger";
        header("location: index.php");

}
