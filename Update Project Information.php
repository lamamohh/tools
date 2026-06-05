<?php
$conn = mysqli_connect("localhost","root","","it_company");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['project_name'];

    $sql = "UPDATE projects
            SET project_name='$name'
            WHERE id='$id'";

    mysqli_query($conn,$sql);

    echo "Project Updated";
}
?>

<form method="post">
    <input type="number" name="id" placeholder="Project ID">
    <input type="text" name="project_name" placeholder="New Name">
    <button name="update">Update</button>
</form>