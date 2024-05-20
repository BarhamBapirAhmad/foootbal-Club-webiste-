<?php 
        include 'navbar.php';
    ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/squad.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>
<body>
   
        
 <div class="Managers">
        <h1>Coaches


</h1>
<div class="player-cards">
 
        <?php 
include 'config.php';
$query = mysqli_query($conn, "SELECT * FROM player JOIN squad ON (player.position = squad.squad_id)");
if (mysqli_num_rows($query)) {
    while($row = mysqli_fetch_assoc($query)){ 
        if($row['position'] == 1){
?>
    <div class="player-card">
        <img  class="IMG-card" src="<?= $row['img']; ?>" alt="<?= $row['name']; ?>">
        <div class="player-info">
            <div class="player-name"><?= $row['name']; ?></div>
            <div class="player-position"><?= $row['Role']; ?></div>
        </div>
    </div>
<?php 
    }}
}
?>
    
    
    <!-- Add more player cards here -->
</div>
 <div class="Managers">
<h1>Goal Keepers</h1>


 
<div class="player-cards">
  <?php 
  $query = mysqli_query($conn, "SELECT * FROM player JOIN squad ON (player.position = squad.squad_id)");
if (mysqli_num_rows($query)) {
    while($row = mysqli_fetch_assoc($query)){ 
        
        if($row['position'] == 2){
?>
  
    <div class="player-card">
        <img class="IMG-card" src="<?= $row['img']; ?>" alt="<?= $row['name']; ?>">
        <div class="player-info">
        <div><span class="playerNumber" ><?=$row['number'] ?></span></div>
            <div class="player-name"><?= $row['name']; ?></div>
            <div class="player-position"><?= $row['position_squad']; ?></div>
        </div>
    </div>
  
<?php 
    }}
}
?>
    </div>
</div>  
    <!-- Add more player cards here -->
 


    <div class="Managers">
<h1>Defender</h1>


 
<div class="player-cards">
  <?php 
  $query = mysqli_query($conn, "SELECT * FROM player JOIN squad ON (player.position = squad.squad_id)");
if (mysqli_num_rows($query)) {
    while($row = mysqli_fetch_assoc($query)){ 
        
        if($row['position'] == 4){
?>
  
    <div class="player-card">
        <img  class="IMG-card" src="<?= $row['img']; ?>" alt="<?= $row['name']; ?>">
        <div class="player-info">
        <div><span class="playerNumber" ><?=$row['number'] ?></span></div>
            <div class="player-name"><?= $row['name']; ?></div>
            <div class="player-position"><?= $row['position_squad']; ?></div>
        </div>
    </div>
  
<?php 
    }}
}
?>
    </div>
</div>  

<!-- mid                                                         ---------------------------------  -->


<div class="Managers">
<h1>Midfeilsers</h1>


 
<div class="player-cards">
  <?php 
  $query = mysqli_query($conn, "SELECT * FROM player JOIN squad ON (player.position = squad.squad_id)");
if (mysqli_num_rows($query)) {
    while($row = mysqli_fetch_assoc($query)){ 
        
        if($row['position'] == 3){
?>
  
    <div class="player-card">
        <img class="IMG-card" src="<?= $row['img']; ?>" alt="<?= $row['name']; ?>">
        <div class="player-info">
        <div><span class="playerNumber" ><?=$row['number'] ?></span></div>
            <div class="player-name"><?= $row['name']; ?></div>
            <div class="player-position"><?= $row['position_squad']; ?></div>
        </div>
    </div>
  
<?php 
    }}
}
?>
    </div>
</div>  



<div class="Managers">
<h1>Attackers</h1>


 
<div class="player-cards">
  <?php 
  $query = mysqli_query($conn, "SELECT * FROM player JOIN squad ON (player.position = squad.squad_id)");
if (mysqli_num_rows($query)) {
    while($row = mysqli_fetch_assoc($query)){ 
        
        if($row['position'] == 5){
?>
  
    <div class="player-card">
        <img  class="IMG-card" src="<?= $row['img']; ?>" alt="<?= $row['name']; ?>">
        <div class="player-info">
        <div><span class="playerNumber" ><?=$row['number'] ?></span></div>
            <div class="player-name"><?= $row['name']; ?></div>
            <div class="player-position"><?= $row['position_squad']; ?></div>
        </div>
    </div>
  
<?php 
    }}
}
?>
    </div>
</div>  

</body>
</html>
<?php 
        include 'footer.php';
    ?>