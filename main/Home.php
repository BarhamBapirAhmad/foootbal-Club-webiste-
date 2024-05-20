<?php 
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
     <title>Home</title>

</head>
<style>
    body{
        background-color: #f8f6ff!important;

    }
</style><?php 
    include 'navbar.php';
?>
<body>



    <div class="image-container" onmousedown="mouseDown(event)" onmousemove="mouseMove(event)" onmouseup="mouseUp()">
        <!-- <?php 
            $sql = "SELECT * FROM news";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<img src="$row[img/mnu-08.jpg]"/>';
                }
            }
        ?> -->
     <img id="image1"  height="80%"src="img/rma-prime.png" alt="Description of the image 1">
     <img id="image2" src="img/mnu-08.jpg" alt="Description of the image 2">
     <img id="image2" src="img/Iraq_football_team.jpg" alt="Description of the image 2">
        <img id="image2" src="img/prg.png" alt="Description of the image 2">
        <img id="image2" src="img/rma-1.jpg" alt="Description of the image 2">
        <img id="image2" src="img/rma-2.jpg" alt="Description of the image 2">
         <img id="image2" src="img/rma-24.jpg" alt="Description of the image 2">
     <!-- Add more img tags for each of your images -->
    </div>
    <div class="card-5zs">
    <?php 
    require_once('config.php');
    $query = mysqli_query($conn, 'SELECT * FROM matches   ORDER BY `Time-clock` ASC limit 1');
    if (mysqli_num_rows($query) > 0) {
        while ($topmatches = mysqli_fetch_assoc($query)) {
              // Example time string
             
            $timeString = $topmatches['Time-clock'];
             $timestamp = strtotime($timeString);

             $formattedDate = date("l, F j, Y \\a\\t g:i A", $timestamp);
             $formattedDate1 = date("l, F j, Y ", $timestamp);
             $dateTime = Date("m d H-i",$timestamp);

             $timestamp1 = strtotime($timeString);

// Format the timestamp to get just the hour and AM/PM indicator
$formattedTime = date("g:i A", $timestamp1);
 
           ?>
            <div class="logo-lfw pb-md-arp"><img src="https://github.com/luukhopman/football-logos/blob/master/logos/ES1/Real%20Madrid.png?raw=true">
                <h2 class="team-3br">RealMadrid</h2>
            </div>
            <div class="match-rxf">
                
                <div class="ggmxf"><img src="data:image/png;base64,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"></div>
                <div class="match-aw2"><span><?php  echo $formattedDate ?></span></div>
                <div class="Lig-roy">IRAQ STAR League 2023 - 2024 </div>
                <div dir="ltr" class="tim-zpw mt-six">
                    <?php              

                    $date1 = new DateTime($formattedDate1); // Example start date
                    $date2 = new DateTime(); // Current date and time (now)
                    $interval = $date1->diff($date2); // Calculate the difference between the two dates

                    if ($interval) {
                        ?>
                        <div id="days" dir="ltr"><?php echo $interval->d; ?> <span>D</span></div> : 
                        <div id="hours" dir="ltr"><?php echo $interval->h; ?> <span>H</span></div> : 
                        <div id="minutes" dir="ltr"><?php echo $interval->i; ?> <span>M</span></div>
                        <?php
                    } else {
                        echo "Error calculating interval.";
                    }
                    ?>
                    
                </div>
                <p>
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="#969696" d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7"/></svg>
        </span>
        <?php echo $topmatches['Location'] ?> </p>
            </div>
            <div class="logo-lfw pb-md-arp"><img src="<?php echo $topmatches['TeamSecondLogo'] ?>">
                <h2 class="team-3br"><?php  echo $topmatches['SecondTeam'] ?></h2>
            </div>
           

        </div>
    <?php 
        } 
    }
    ?> 
</div>
    <!-- -------------------------------------------------------------------- -->
   
    <div class="upmatches">
    <h1>UPCOMING MATCHES</h1>
   <?php 

    require_once('config.php');
    $query = mysqli_query($conn,'select * from matches  ORDER BY `Time-clock` ASC');
    mysqli_data_seek($query, 1);

    $numMatches=0;
    if (mysqli_num_rows($query)>0) {
        while ($upmatches = mysqli_fetch_assoc($query)) {
            $timeString = $upmatches['Time-clock'];
            $timestamp = strtotime($timeString);

            $formattedDate = date("l, F j, Y \\a\\t g:i A", $timestamp);

            $timestamp1 = strtotime($timeString);

// Format the timestamp to get just the hour and AM/PM indicator
$formattedTime = date("g:i A", $timestamp1);
    ?>
  

    <div class="matchbox">
        <p>IRAQ SUPER League</p>
        <div class="row2">
            <img src="https://github.com/luukhopman/football-logos/blob/master/logos/ES1/Real%20Madrid.png?raw=true" alt="">
            <div class="time"><?php echo $formattedTime?> </div> <!-- Apply yellow color -->
            <img src="<?php echo $upmatches['TeamSecondLogo'] ?> "alt="">
        </div>
        <div class="teamname"> 
            <div>RealMadrid </div>
            <div><?php echo $upmatches['SecondTeam'] ?></div>
            </div>
        <p><span><svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="#969696" d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7"/></svg></span><?php echo $upmatches['Location'] ?> </p>
          <p><?php echo $formattedDate ?> </p>
      
        </div>
    <?php 
         $numMatches++;
         if ($numMatches == 3) {
             break;
         }
         } }
 ?>
   </div>
      

            <h1>A legendary track record</h1>

<div class="records" >
            <div class="col-legend" ></div>
                <img  class="wons" src="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--8b61ca70-43f7-4be6-9c51-99888d45a26f/ND_SALA_JUNTAS_HE02463Thumb.app.png?preferwebp=true&width=700" alt="">
               <div class="rihtside" >  
               <?php 
    require_once('config.php');
    $query = mysqli_query($conn, 'SELECT * FROM rewards ');
      $counter=0;
    if (mysqli_num_rows($query) > 0) {
        while ($reward = mysqli_fetch_assoc($query)) { 
          
            if ($reward['numTitiles'] > 15) {
                $multiplier = 6.88 * $reward['numTitiles'];
            } elseif ($reward['numTitiles'] <= 15 && $reward['numTitiles'] > 10) {
                $multiplier = 8.88 * $reward['numTitiles'];
            } elseif ($reward['numTitiles'] <= 10 && $reward['numTitiles'] > 5) {
                $multiplier = 15.88 * $reward['numTitiles'];
            } elseif ($reward['numTitiles'] < 5 && $reward['numTitiles'] > 0) {
                $multiplier = 18.88 * $reward['numTitiles'];
            } else {
                $multiplier = 5.88 * $reward['numTitiles'];
            }
                
            ?> 
                <div class="records1" > 
                        <h3><?php echo $reward['Name']?> </h3> 
                      <div class="rowins" style="width: <?php echo $multiplier  ?>% ;" >
<span><img class="img-champion" src="https://publish-p47754-e237306.adobeaemcloud.com/content/dam/common/statics/public-content/competition/football/4oogyu6o156iphvdvphwpck10-icon.app.svg?$Desktop$&wid=32&hei=32" alt=""></span>
<span><p><?php echo $reward['numTitiles'] ?> titles </p> </span>
                    </div>
                    </div> 
                        <?php
                        $counter++;
                        if ($counter == 5) {
                            break;
                        }
                } } ?>
                
                    
                
                </div>
                
            </div>   
             <div class="veiwall">  <a href="about-club.php"><button class="button-60" role="button">Veiw All </button></a> 
</div>

    </div>
</body>

<?php 
    include 'footer.php';
?>
<script> 
 var images = ["img/rma-prime.png", "img/mnu-08.jpg"]; // Add the paths to all your images
var currentImage = 0;
var isMouseDown = false;
var startX, scrollLeft;

var slider = document.querySelector('.image-container');

function mouseDown(e) {
    isMouseDown = true;
    slider.classList.add('active');
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
}

function mouseMove(e) {
    if (!isMouseDown) return;
    e.preventDefault();
    var x = e.pageX - slider.offsetLeft;
    var walk = (x - startX) * 2 //scroll-fast
    slider.scrollLeft = scrollLeft - walk;
}

function mouseUp() {
    isMouseDown = false;
    slider.classList.remove('active');

    var imageWidth = document.getElementById('image1').clientWidth;
    var remainder = slider.scrollLeft % imageWidth;
    if (remainder < imageWidth / 2) {
        // Less than half of the next image is scrolled, revert back to the original image
        slider.scrollLeft -= remainder;
    } else {
        // More than half of the next image is scrolled, scroll to the next image
        slider.scrollLeft += imageWidth - remainder;
    }
}

function changeImage() {
    currentImage++;
    if (currentImage >= images.length) {
        currentImage = 0;
    }
    var imgElements = document.querySelectorAll('.image-container img');
    imgElements.forEach(img => img.src = images[currentImage]);
}

setInterval(changeImage, 30000); // Change image every 30 seconds
var nextDate = "Apr 15, 2024 18:00:00";
var countdownDate = new Date(nextDate).getTime();
var match1Date = new Date(nextDate);
document.getElementById("match-aw2").innerHTML = "<span>" + match1Date.toDateString() + " at </span><span>" + match1Date.getHours() + ":" + match1Date.getMinutes() + " PM</span>";

var countdownInterval = setInterval(function() {

    var now = new Date().getTime();
    var distance = countdownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

    document.getElementById("days").innerHTML = days + " <span>D</span>";
    document.getElementById("hours").innerHTML = hours + " <span>H</span>";
    document.getElementById("minutes").innerHTML = minutes + " <span>M</span>";

    if (distance < 0) {
        clearInterval(countdownInterval);
        document.getElementById("days").innerHTML = "";
        document.getElementById("hours").innerHTML = "";
        document.getElementById("minutes").innerHTML = "Match started!";
    }
}, 1000);
</script>
</html>