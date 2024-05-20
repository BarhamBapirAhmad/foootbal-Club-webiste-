
<?php 
include('navbar.php');
?>
<?php
require_once('../config.php');
date_default_timezone_set('UTC');

if(isset($_POST['updateBtn'])){
    $club_id = $_POST['clubID'];
    $secondTeam = $_POST['secondTeam'];
    $timeClock = $_POST['timeClock'];
    $logoPath = $_POST['logoPath'];
    $Location = $_POST['Location'];
    
    // Corrected SQL query with backticks for column names
    $query = mysqli_query($conn, "UPDATE `matches` SET `SecondTeam` = '$secondTeam', `Time-clock` = '$timeClock', `TeamSecondLogo` = '$logoPath', `Location` = '$Location' WHERE `ID` = $club_id   ");
    
    if ($query) {
        header("Location: ../home.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admintable.css">
    <title>Document</title>
</head>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f6ff!important;

        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .logo-img {
            max-width: 50px;
            max-height: 50px;
        }
        select{
            background-color:  white;
            margin-left: 20px;
             width: 80%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            text-align: center;
         
        }  </style>
 
<body>
<form action="admin.table.php" method="POST">
<div class="crud-card">
    <div class="crud-card-header">
<input type="text" class="name-input" name="secondTeam" placeholder="Name">
</div>
    <div class="crud-card-body">
             <input type="text" class="logo-input" name="logoPath" placeholder="Logo Path">
   <input type="datetime-local" class="date-input" name="timeClock" placeholder="Date">
        <input type="text" class="location-input" name="Location" placeholder="Location">
    </div>
    <select name="clubID" id="">
    <?php 
    $query = mysqli_query($conn, "SELECT * from matches LIMIT 4");  
    if (mysqli_num_rows($query)) {
        $games = ["game 1", "game 2", "game 3", "game 4"]; // Array to hold game names
        $index = 0; 
        while($row = mysqli_fetch_assoc($query)){ ?>
            <option value="<?= $row['ID']; ?>">
                <?= $games[$index]; ?> <!-- Displaying game name -->
            </option>
            <?php 
            $index++; // Incrementing index
        }
    }  
    ?>
    </select>
    
    <div class="crud-card-footer">
          <button class="crud-btn update-btn" name="updateBtn">Update</button>
    
    </div>
</div>
 </form>

 
 
 

<h2>Matches</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>TeamName</th>
            <th>Time</th>
            <th>Team Second Logo</th>
            <th>Location</th>
            <th>game number</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Fetch rows from the result set
        require_once('../config.php');
        $query = mysqli_query($conn, 'SELECT * FROM matches WHERE ID BETWEEN 1 AND 40 ORDER BY `Time-clock` ASC');
        $games = ["game 1", "game 2", "game 3", "game 4"]; // Array to hold game names
        $index = 0; 
if (mysqli_num_rows($query) > 0) {
    while ($result = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>" . $result['ID'] . "</td>";
        echo "<td>"  . $result['SecondTeam'] . "</td>";
        echo "<td>" . $result['Time-clock'] . "</td>";
        if (!empty($result['TeamSecondLogo'])) {
            echo "<td><img src='" . $result['TeamSecondLogo'] . "' alt='Team Logo' class='logo-img'></td>";
        } else {
            echo "<td>No logo available</td>";
        }
        echo "<td>" . $result['Location'] . "</td>";
        echo "<td>". $games[$index] ."</td>";
        echo "</tr>";
        $index++; 
    }
} ?>
    
    </tbody>
</table>
</body>
</html>