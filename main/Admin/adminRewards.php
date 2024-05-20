<?php 
include('navbar.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style> 
         .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
         
            flex-direction: row;
        }

        .card {
            text-align: center;
            padding: 0 auto;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 10px;
             width: calc(100% / 7 - 20px);  
            height: auto;
        }
        @media (max-width: 768px) {
            .card {
                width: calc(100% / 3 - 20px);
            }
            
        }    @media (max-width: 568px) {
            .card {
                width: calc(100% / 2 - 20px);
            }
            
        }


        .edit-form {
            width: 164px;
            display: none;
        }

        .btn {
            padding: 6px 12px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            display: block;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        body {
            background-color: #f8f6ff!important;
        }

        .logo-img {
            width: 150px;
            height: 100px;
            border-radius: 8%;
        }

    </style>
<body>
<div class="card-container">
        <?php
        require_once('../config.php');

        $query = "SELECT * FROM rewards";
        $result = mysqli_query($conn, $query);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card'>";
                echo "<img src='{$row['img']}' alt='Team Logo' class='logo-img'>";
                echo "<h3>{$row['Name']}</h3>";
                echo "<p>Number of titiles: {$row['numTitiles']}</p>";
                echo "<p>Years: {$row['year']}</p>";
            
                 echo "<button class='btn' onclick='toggleForm(\"edit-form-{$row['ID']}\")'>Update</button>";
              
                 echo "<form method='post' action=''>";
                echo "<div class='edit-form' id='edit-form-{$row['ID']}'>";
                echo "<input type='hidden' name='ID' value='{$row['ID']}'>";
                 echo "<textarea name='year' class='form-input' placeholder='Type years here'>{$row['year']}</textarea>";
                echo "<input type='number' name='numTitiles' placeholder='Number of titles' value='{$row['numTitiles']}'>";
                echo "<button class='btn' type='submit' name='update-btn'>Update</button>";
                echo "</div>";
                echo "</form>";
                echo "</div>";
            }
          
        } 
        else {
            echo "Error: " . mysqli_error($conn);
        }

        if (isset($_POST['update-btn'])) {
            $team_id = $_POST['ID'];
            $year = $_POST['year'];
            $numTitles = $_POST['numTitiles'];
        
             if (!empty($team_id) && !empty($year) && !empty($numTitles)) {
                 $team_id = mysqli_real_escape_string($conn, $team_id);
                $year = mysqli_real_escape_string($conn, $year);
                $numTitles = mysqli_real_escape_string($conn, $numTitles);
        
                 $update_query = "UPDATE rewards SET `year` = '$year', `numTitiles` = '$numTitles' WHERE ID = '$team_id'";
        
                 $update_result = mysqli_query($conn, $update_query);
        
                if ($update_result) {
                    echo "<script>alert('Record updated successfully.')</script>";
                    echo "<meta http-equiv='refresh' content='0'>";
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }
            } else {
                echo "All fields are required.";
            }
        }
            
        
        ?>
 </div>
<br>
   
    <hr>
         <div class="lkjcontainer " style="display:block">
        <form class="form" method="post" action="">
            <h2>Add Title</h2>
            <input type="text" class="form-input" name="team_name" placeholder="Title Name" required>
            <input type="text" class="form-input" name="team_logo" placeholder="Title  Logo URL" required>
             <textarea name="years" class="form-input" name="wins"  placeholder="Type years here" required></textarea>

            <input type="number" class="form-input" name="title" placeholder="Number of title  " required>
           
            <button type="submit" class="btn" name="add-team-btn">Add Title</button>
        </form>
    </div>
    
    <?php
     if (isset($_POST['add-team-btn'])) {
        $team_name = $_POST['team_name'];
        $team_logo = $_POST['team_logo'];
        $wins = $_POST['wins'];
        $title = $_POST['title'];
       

        // Insert team into database
        $insert_query = "INSERT INTO rewards (Name, img, year, numTitiles) 
                        VALUES ('$team_name', '$team_logo', '$wins', '$title')";
        $insert_result = mysqli_query($conn, $insert_query);
        if ($insert_result) {
            echo "<script>alert('Team added successfully.')</script>";
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo "Error adding team: " . mysqli_error($conn);
        }
    }
    ?> 
  
    <script>
         function toggleForm(formId) {
            var form = document.getElementById(formId);
            form.style.display = (form.style.display === 'none') ? 'block' : 'none';
        }
    </script>
</body>
</html>