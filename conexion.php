<?php
$conn = mysqli_connect("localhost", "root", "12345678", "autoshop");
if (!$conn) {
    die("Parece que la página no está funcionando correctamente: " . mysqli_connect_error());
}

?>