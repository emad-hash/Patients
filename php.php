<?php
session_start();
require 'connection.php';

if(isset($_POST['delete_patient']))
{
    $patient_id = mysqli_real_escape_string($con, $_POST['delete_patient']);

    $query = "DELETE FROM patient WHERE id='$patient_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "patient Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "patient Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_patient']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['patient_id']);

    $name = mysqli_real_escape_string($con, $_POST['Name']);
    $age = mysqli_real_escape_string($con, $_POST['Age']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $Address = mysqli_real_escape_string($con, $_POST['Address']);

    $query = "UPDATE patient SET Name='$name', Age='$age', phone='$phone', Address='$Address' WHERE id='$patient_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "patient Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "patient Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_Patients']))
{
    $name = mysqli_real_escape_string($con, $_POST['Name']);
    $age = mysqli_real_escape_string($con, $_POST['Age']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $Address = mysqli_real_escape_string($con, $_POST['Address']);

    $query = "INSERT INTO patient (Name,Age,phone,Address) VALUES ('$name','$age','$phone','$Addres')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "patient Created Successfully";
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "patient Not Created";
        header("Location: create.php");
        exit(0);
    }
}

?>