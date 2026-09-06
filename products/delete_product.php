<?php
include "../config/database.php";

$id = $_GET['id'];

// Delete related transactions first
mysqli_query($conn, "DELETE FROM transactions WHERE product_id=$id");

// Delete product
mysqli_query($conn, "DELETE FROM products WHERE id=$id");

header("Location: ../products.php");
exit();

?>