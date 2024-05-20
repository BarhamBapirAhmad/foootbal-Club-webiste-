<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>dsgxgncv</h1>

    <?php 
        if(isset($_GET['player_id'])){
            $player_id = $_GET['player_id'];
            include 'navbar.php';
            include 'playerDetail.php';
        }
        else{
            echo "Player not found";
        }
        ?>
</body>
</html>