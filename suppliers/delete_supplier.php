<?php
include "../config/database.php";

$id = $_GET['id'];

// Remove products connected to this supplier
mysqli_query($conn, "DELETE FROM products WHERE supplier_id=$id");

// Remove supplier
mysqli_query($conn, "DELETE FROM suppliers WHERE id=$id");

header("Location: ../suppliers.php");
exit();

?>