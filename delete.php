<?php
if ( isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = 'localhost';
    $username = 'root';
    $password = 'Asdf@1999';
    $database = 'myshop';

    //create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM clients WHERE id=$id";
     $result = $connection->query($sql);
    $connection->query($sql);
    if ($result) {
        $successMessage = "Deleted Successfully";
        header("location: /PHP CRUD/index.php");
        exit;
    } else {
        // Handle the case where the DELETE query fails
        $errorMessage = "Error deleting record: " . $connection->error;
    }
}

?>