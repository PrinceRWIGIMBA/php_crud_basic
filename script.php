<?php
session_start();
require 'db.php';
if(isset($_POST['delete']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM employeee WHERE id='$employee_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "employee Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "employee Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['employee_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $location = mysqli_real_escape_string($con, $_POST['location']);

    $query = "UPDATE employeee SET name='$name', email='$email', phone='$phone', location='$location' WHERE id='$employee_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "employee Updated Successfully";
        header("Location: edit.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "employee Not Updated";
        header("Location: edit.php");
        exit(0);
    }

}

if(isset($_POST['save_employee'])){
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $location=mysqli_real_escape_string($con,$_POST['location']);

    $query ="INSERT INTO employeee (name,email,phone,location) VALUES ('$name','$email','$phone','$location')";
    $query_run=mysqli_query($con,$query);
    if($query_run){
        $_SESSION['message']="employee created successfully";
        header("Location: create.php");
        exit(0);
    }
    else{
        $_SESSION['message']="employee not created";
        header("Location: create.php");
        exit(0);
    }
}

?>