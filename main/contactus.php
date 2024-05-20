
<?php 
include 'config.php';
     
     if (isset($_POST['Sumbit'])) {
        // Escape user inputs for security
        $FirstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
        $Email = mysqli_real_escape_string($conn, $_POST['Email']);
        $Feedback = mysqli_real_escape_string($conn, $_POST['feedback']);
          $sql = "INSERT INTO feedback (Name, Email, Feedback) VALUES ('$FirstName', '$Email', '$Feedback')";


    $result=mysqli_query($conn,$sql);
        if ($result) {
            echo "successfull ";
            header("location:contactus.php");
        } else {
            echo "Error   user: " . mysqli_error($conn);
        }
    }
    

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="css/navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <title>Contact us </title>
</head>

<body>

    <?php
    include 'navbar.php';
    ?>
    <div class="contact_us_6">
        <div class="responsive-container-block container">
            <form class="form-box" action="contactus.php" method="post">
                <div class="container-block form-wrapper">
                    <div class="mob-text">
                        <p class="text-blk contactus-head">
                            Get in Touch
                        </p>
                        <p class="text-blk contactus-subhead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis diam lectus sapien.
                        </p>
                    </div>
                    <div class="responsive-container-block" id="i2cbk">
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
                            <p class="text-blk input-title">
                                FIRST NAME
                            </p>
                            <input class="input" id="ijowk-3" name="FirstName" placeholder="Please enter first name...">
                        </div>
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
                            <p class="text-blk input-title">
                                EMAIL
                            </p>
                            <input class="input" id="ipmgh-3" name="Email " autocomplete="off" placeholder="you@example.com" required>
                        </div>

                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
                            <p class="text-blk input-title">
                                WHAT DO YOU HAVE IN MIND ?
                            </p>
                            <textarea class="textinput" name="feedback" id="i5vyy-3" placeholder="Please enter query..."></textarea>
                        </div>
                    </div>
                    <button class="submit-btn" name="Sumbit" id="w-c-s-bgc_p-1-dm-id-2">
                        Submit
                    </button>
                </div>
            </form>
            <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
                <div class="map-part">
                    <p class="text-blk map-contactus-head" id="w-c-s-fc_p-1-dm-id">
                        Reach us at
                    </p>
                    <p class="text-blk map-contactus-subhead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis diam lectus sapien.
                    </p>
                    <div class="social-media-links mob">
                        <a class="social-icon-link" href="#" id="ix94i-2-2">
                            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-twitter.png">
                        </a>
                        <a class="social-icon-link" href="#" id="itixd">
                            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-facebook.png">
                        </a>
                        <a class="social-icon-link" href="#" id="izxvt">
                            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-google.png">
                        </a>
                        <a class="social-icon-link" href="" id="izldf-2-2">
                        </a>
                    </div>
                    <div class="map-box container-block">
                        <iframe class="map-container" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387268.7466428553!2d-74.25987547788028!3d40.697670005590375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1620627871009!5m2!1sen!2s" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    </div>
                </div>
            </div>
        </div>

    </div>
 


    <?php 
        include 'footer.php';   
    ?>
      


</body>

</html>