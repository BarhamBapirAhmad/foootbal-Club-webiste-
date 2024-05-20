<?php 
include('navbar.php');
include('../config.php');

// Create player
if(isset($_POST['create_player'])){
    $playername = $_POST['playername'];
    $logoPath = $_POST['logoPath'];
    $number = $_POST['number'];
    $role = $_POST['role'];
    $position = $_POST['position'];
    $query = mysqli_query($conn, "INSERT INTO `player`(`name`, `number`, `img`, `position`, `Role`) VALUES ('$playername', '$number', '$logoPath', '$position', '$role')");
    if($query){
        header("Location: playerAdmin.php");
        exit; // Ensure no further code is executed after redirection
    }
}

// Delete player
if(isset($_POST['delete_player'])){
    $player_id = $_POST['player_id'];
    $delete_query = mysqli_query($conn, "DELETE FROM `player` WHERE ID = '$player_id'");
    if($delete_query){
        header("Location: playerAdmin.php");
        exit; // Ensure no further code is executed after redirection
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f6ff!important;
            margin: 0 auto;
        }

        .crud-card {
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            width: 300px; /* Adjust width as needed */
        }

        .crud-card-header,
        .crud-card-body,
        .crud-card-footer {
            padding: 20px;
        }

        .name-input,
        .logo-input,
        .date-input,
        select {
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        select {
            height: 35px;
        }

        .crud-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .crud-btn:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>
<form action="playerAdmin.php" method="POST">
    <div class="crud-card">
        <div class="crud-card-header">
            <input type="text" class="name-input" name="playername" placeholder="Name">
        </div>
        <div class="crud-card-body">
            <input type="text" class="logo-input" name="logoPath" placeholder="Logo Path">
            <input type="text" class="date-input" name="number" placeholder="number">
            <input type="text" class="date-input" name="role" placeholder="role">
            <select name="position" id="">
                <?php 
                $query = mysqli_query($conn, "SELECT * from squad");
                if (mysqli_num_rows($query)) {
                    while($row = mysqli_fetch_assoc($query)){ ?>
                        <option value="<?= $row['squad_id']; ?>">
                            <?php echo $row['position_squad']; ?> 
                        </option>
                    <?php }
                }
                ?>
            </select>
        </div>
        <div class="crud-card-footer">
            <button name="create_player" class="crud-btn create-btn">Create</button>
        </div>
    </div>
</form>
<br><hr>
<form action="playerAdmin.php" method="post">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Logo Path</th>
                <th>Number</th>
                <th>Role</th>
                <th>Position</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = mysqli_query($conn, "SELECT * FROM player JOIN squad ON player.position = squad.squad_id");
            if (mysqli_num_rows($query)) {
                while($row = mysqli_fetch_assoc($query)){ ?>
                    <tr>
                        <td><?= $row['name']; ?></td>
                        <td> <img src="<?= $row['img']; ?>" alt="" width="40px" head="40px"></td>
                        <td><?= $row['number']; ?></td>
                        <td><?= $row['Role']; ?></td>
                        <td><?= $row['position_squad']; ?></td>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" name="player_id" value="<?= $row['ID']; ?>">
                                <button class="delete-btn" name="delete_player">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php }
            } else { ?>
                <tr>
                    <td colspan="6">No players found</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</form>
</body>
</html>
