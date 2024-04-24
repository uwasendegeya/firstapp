<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration Form</title>
<style>
    .form-container {
    width: 100%; 
    max-width: 500px;
    margin: 0 auto; 
    padding: 0 15px; 
    background-color: #f2f2f2;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}
    .form-container h2 {
        text-align: center;
        color: #333;
    }

    .form-container input[type="text"],
.form-container input[type="email"],
.form-container input[type="date"],
.form-container select,
.form-container textarea {
    width: 100%;
    padding: 15px;
    margin: 10px 15px; 
    border: none;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
}
    .form-container input[type="submit"] {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 5px;
        background-color: #4CAF50; 
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .form-container input[type="submit"]:hover {
        background-color: #45a049; 
    }
    .form-container label {
        color: #555;
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    .form-container h3{
        text-align: center;
        color: #333;
    }
</style>
</head>
<body>

<div class="form-container">
    <div>
        <?php
        if(isset($_SESSION['msg'])){
            $msg =$_SESSION['msg'];
            echo $msg;
        }
        ?>
    </div>
    <h2>Student Registration Form</h2>
    <form action="insert.php" method="post" id="registration-form">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>

        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="address">Address</label>
        <textarea id="address" name="address" rows="2" placeholder="Enter your address" required></textarea>

        <input type="submit" value="Register" name="submit">
    </form>
   <!DOCTYPE html>
   <html lang="en">
   <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
       /* CSS styles... */
   </style>
   </head>
   <body>
   
   <div style="display: flex;">
       <div class="form-container">
           <div>
               <?php
               // Start the session
               session_start();
               
               // Check if a message is set in the session
               if(isset($_SESSION['msg'])){
                   $msg = $_SESSION['msg'];
                   echo $msg;
               }
               ?>
           </div>
          
       </div>
   </div>
   <h3>Your inputs</h3>
   <table>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>DATE</th>
    <th>GENDER</th>
    <th>ADDRESS</th>
   <?php
include"connection.php";
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["dob"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "</tr>";
    }
}
else {
  echo "0 results";
}
mysqli_close($conn);
?>
   </body>
   </html>

</div>

</body>
</html>
