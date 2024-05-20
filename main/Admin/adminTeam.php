<?php 
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Management</title>
    <style>
        /* Card container styles */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-self: start;
        }

        /* Card styles */
        .card {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            width: auto;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 10px;
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
            background-color: #316D13;
            color: #fff;
            cursor: pointer;
            display: block;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        body{
            background-color: #f8f6ff!important;
        }

        .logo-img{
            width: 100px;
            height: 100px;
            border-radius: 8%;
        }
    </style>
</head>
<body>
    <div class="card-container">
        <?php
        // Database connection
        require_once('../config.php');

        // Fetch teams data from the database
        $query = "SELECT * FROM club";
        $result = mysqli_query($conn, $query);

        // Check if query executed successfully
        if ($result) {
            // Loop through each team
            while ($row = mysqli_fetch_assoc($result)) {
                $points = $row['win'] * 3 + $row['draw']; // Calculate points
                
                echo "<div class='card'>";
                echo "<img src='{$row['Logo']}' alt='Team Logo' class='logo-img'>";
                echo "<h3>{$row['name']}</h3>";
                echo "<p>Wins: {$row['win']}</p>";
                echo "<p>Draws: {$row['draw']}</p>";
                echo "<p>Loses: {$row['losee']}</p>";
                echo "<p>Goals: {$row['goalScored']}</p>";
                echo "<p>Points: $points</p>"; // Display calculated points
                
                // Edit button to toggle the edit form visibility
                echo "<button class='btn' onclick='toggleForm(\"edit-form-{$row['id']}\")'>Edit</button>";

                // Delete button
                echo "<form method='post' action=''>";
                echo "<input type='hidden' name='team_id' value='{$row['id']}'>";
                echo "<button class='btn' type='submit' name='delete-btn'>Delete</button>";
                echo "</form>";

                // Edit form for updating team values
                echo "<form method='post' action=''>";
                echo "<div class='edit-form' id='edit-form-{$row['id']}'>";
                echo "<input type='hidden' name='team_id' value='{$row['id']}'>";
                echo "<input type='number' name='wins' placeholder='Wins' value='{$row['win']}'>";
                echo "<input type='number' name='loses' placeholder='Loses' value='{$row['losee']}'>";
                echo "<input type='number' name='goals' placeholder='Goals' value='{$row['goalScored']}'>";
                echo "<input type='number' name='draws' placeholder='Draws' value='{$row['draw']}'>";
                echo "<button class='btn' type='submit' name='update-btn'>Update</button>";
                echo "</div>";
                echo "</form>";
                echo "</div>";
            }
        } 
        else {
            echo "Error: " . mysqli_error($conn);
        }

        // Handle update operation
        if (isset($_POST['update-btn'])) {
            $team_id = $_POST['team_id'];
            $wins = $_POST['wins'];
            $loses = $_POST['loses'];
            $goals = $_POST['goals'];
            $draws = $_POST['draws'];
            $points = $wins * 3 + $draws; // Recalculate points
            
            $update_query = "UPDATE club SET `win` = $wins, `losee` = $loses, `goalScored` = $goals, `point` = $points, `draw` = $draws WHERE id = $team_id";
            $update_result = mysqli_query($conn, $update_query);
            if ($update_result) {
                echo "<script>alert('Team information updated successfully.')</script>";
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }

        // Handle delete operation
        if (isset($_POST['delete-btn'])) {
            $team_id = $_POST['team_id'];
            $delete_query = "DELETE FROM club WHERE id = $team_id";
            $delete_result = mysqli_query($conn, $delete_query);
            if ($delete_result) {
                echo "<script>alert('Team deleted successfully.')</script>";
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }
        }
        ?>
    </div>

    <div class="form-container" style="display:block">
        <form class="form" method="post" action="">
            <h2>Add Team</h2>
            <input type="text" class="form-input" name="team_name" placeholder="Team Name" required>
            <input type="text" class="form-input" name="team_logo" placeholder="Team Logo URL" required>
            <input type="number" class="form-input" name="wins" placeholder="Wins" required>
            <input type="number" class="form-input" name="loses" placeholder="Loses" required>
            <input type="number" class="form-input" name="goals" placeholder="Goals" required>
            <input type="number" class="form-input" name="draws" placeholder="Draws" required>
            <button type="submit" class="btn" name="add-team-btn">Add Team</button>
        </form>
    </div>

    <?php
    // Handle add team operation
    if (isset($_POST['add-team-btn'])) {
        $team_name = $_POST['team_name'];
        $team_logo = $_POST['team_logo'];
        $wins = $_POST['wins'];
        $loses = $_POST['loses'];
        $goals = $_POST['goals'];
        $draws = $_POST['draws'];
        $points = $wins * 3 + $draws; // Calculate points

        // Insert team into database
        $insert_query = "INSERT INTO club (name, Logo, win, losee, goalScored, draw, point) 
                        VALUES ('$team_name', '$team_logo', '$wins', '$loses', '$goals', '$draws', '$points')";
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
        // Function to toggle the visibility of the edit form
        function toggleForm(formId) {
            var form = document.getElementById(formId);
            form.style.display = (form.style.display === 'none') ? 'block' : 'none';
        }
    </script>
</body>
</html>
