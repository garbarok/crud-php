<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM books WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'Libro eliminado satisfactoriamente';
    $_SESSION['message_type'] = 'danger';
    header('Location: index.php');
}
?>