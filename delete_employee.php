<?php
$conn = mysqli_connect("localhost","root","","it_company");

$id = $_GET['id'];

$sql = "DELETE FROM employees WHERE id=$id";

mysqli_query($conn,$sql);

echo "Employee Deleted Successfully";
?>