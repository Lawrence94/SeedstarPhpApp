<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="<?php echo site_url();?>assets/bootstrap/css/bootstrap.min.css">
<script src="<?php echo site_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<title>PHP Challenge</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    opacity: 0.7;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background: #fff;
    min-height: 100%;
}

/* Turn off parallax scrolling for tablets and mobiles */
@media only screen and (max-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar" id="myNavbar">
    <li><a href="<?php echo site_url();?>" class="w3-padding-large">HOME</a></li>
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container">
    <div class="w3-content w3-container w3-padding-64" id="about">
        <form action="<?php echo site_url('add');?>" method="post">
            <div style="<?php echo $alert_display ?>" class="alert <?php echo $alert_type ?> fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $alert_message ?>
            </div>
            <div class="form-group">
                <label for="fname">Full Name: </label>
                <input type="text" name="fname" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <button type="submit" class="btn btn-default">Add</button>
        </form>
    </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-dark-grey w3-padding-48 w3-hover-black">
  <p>Powered by <a href="#" title="W3.CSS" target="_blank" class="w3-hover-opacity">#RazNerd Inc. :)</a></p>
</footer>
 
</body></html>