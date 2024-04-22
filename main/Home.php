<?php 
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="navbar.css">
    <title>Home</title>

</head>
<body>

<?php 
    include 'navbar.php';
?>

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
     <img id="image1" src="img/rma-prime.png" alt="Description of the image 1">
     <img id="image2" src="img/mnu-08.jpg" alt="Description of the image 2">
     <img id="image2" src="img/Iraq_football_team.jpg" alt="Description of the image 2">
        <img id="image2" src="img/prg.png" alt="Description of the image 2">
        <img id="image2" src="img/rma-1.jpg" alt="Description of the image 2">
        <img id="image2" src="img/rma-2.jpg" alt="Description of the image 2">
         <img id="image2" src="img/rma-24.jpg" alt="Description of the image 2">
     <!-- Add more img tags for each of your images -->
    </div>
    <div class="card-5zs box-6ts">
        <div class="logo-lfw pb-md-arp"><img src="https://www.alnassr.sa/img/main-logo.50941338.png">
            <h2 class="team-3br">Alnassr F.C</h2>
        </div>
        <div class="match-rxf">
            <div class="ggmxf"><img src="data:image/png;base64,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"></div>
            <div class="match-aw2"><span>Friday, April 19, 2024 at </span><span>6:00 PM</span></div>
            <div class="Lig-roy">IRAQ STAR League 2023 - 2024 </div>
            <div dir="ltr" class="tim-zpw mt-six">
         <div id="days" dir="ltr">5 <span>D</span></div> : <div id="hours" dir="ltr">0 <span>H</span></div> : <div id="minutes" dir="ltr">48 <span>M</span></div>
    </div>
  
        </div>
        <div class="logo-lfw pb-md-arp"><img src="https://siteapi.alnassr.sa/files/media/2024-02/06/h67zEKsTOynS5LKsZapm5hTSOACt8yeU.png">
            <h2 class="team-3br">Al-Fayha F.C</h2>
        </div>
    </div>
    <!-- -------------------------------------------------------------------- -->

    <div> 
         
    </div>
</body>
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