<?php
include"connection.php";
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $sql = "INSERT INTO students (name, email, dob, gender, address) VALUES ('$name', '$email', '$dob','$gender','$address')";
    if (mysqli_query($conn, $sql)) {
        ?>
       
        <?php
        $msg = "Successfully inserted !";
    $_SESSION['msg'] = $msg;
        header('location:index.php');
    } 
    else {
        echo "Error:". mysqli_error($conn);
    }
}
?>
