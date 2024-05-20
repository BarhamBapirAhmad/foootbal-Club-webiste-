
<?php 
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Table</title>
<style>
    table {
        margin: 0 auto;
        border-collapse: collapse;
        width: 80%;
    }

    th {
        text-align: center;
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
    }
    td {
        text-align: center;
        border: 1px solid #dddddd;
        text-align: left;
        padding:4px;
    }

    th {
        background-color: #f2f2f2;
    }

    .delete-btn {
        background-color: #ff5555;
        color: white;
        border: none;
        padding: 8px 12px;
        border-radius: 4px;
        cursor: pointer;
    }

    .delete-btn:hover {
        background-color: #cc0000;
    }
    body{
        background-color: #f8f6ff!important;

    }
</style>
</head>
<body>


<h1 style="text-align: center;">users </h1>
<form action="AdminUser.php" method="post">
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created at </th>
      <th>Action</th>

        </tr>
    </thead>
    <tbody>
        
<?php
        // Include database connection
        include '../config.php';
 
        
if (isset($_POST['deleteuser'])) {
    // Escape user inputs for security
    $id = mysqli_real_escape_string($conn, $_POST['IDuser']);
      $sql = "DELETE FROM users WHERE id='$id'";
$result=mysqli_query($conn,$sql);
    if ($result) {
        echo "User deleted successfully";
        header("location:AdminUser.php");
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
}

// Close connection
 
        // SQL query to fetch all users
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $timeString = $row['created_at'];
                $timestamp = strtotime($timeString);
   
                $formattedDate = date("l, F j, Y \\a\\t g:i A", $timestamp);
                echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $formattedDate . "</td>";
                echo "<td><button class='delete-btn' type='submit' name='deleteuser' value='1'>Delete</button></td>";
                echo "</tr>";
                echo "<input type='hidden' name='IDuser' value='" . $row['ID'] . "'>";
            }
        } else {
            echo "<tr><td colspan='4'>No users found</td></tr>";
        }

        // Close connection
         ?>
    </tbody>
</table>
</form>
 <!-- #region 
 -->
<br>
<br>
<hr>
<br>
<br>


<h1 style="text-align: center;">feedbacks</h1>
 <form action="AdminUser.php" method="post">
<table>
    <thead>
        <tr>
             <th>Name</th>
            <th>Email</th>
            <th>feedback</th>
            <th>submited at </th>
        </tr>
    </thead>
    <tbody>
<?php

$sql = "SELECT * FROM `feedback`";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                    if($row['Feedback']!=null){
                        $timeString = $row['created_at'];
                        $timestamp = strtotime($timeString);
           
                        $formattedDate = date("l, F j, Y \\a\\t g:i A", $timestamp);

                echo "<tr>";
                 echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Feedback'] . "</td>";
                echo "<td>" . $formattedDate. "</td>";
                 echo "</tr>";
             }}
        } else {
            echo "<tr><td colspan='4'>No users found</td></tr>";
        }

        // Close connection
       
        ?>
    </tbody>
</table>
</form>

<!-- #region -->
</body>
</html>
