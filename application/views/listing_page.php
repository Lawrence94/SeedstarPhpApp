<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="<?php echo site_url();?>assets/bootstrap/css/bootstrap.min.css">

<style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}</style><link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}.gm-style img{max-width:none}</style>

<title>PHP Challenge</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>
<link rel="stylesheet" href="<?php echo site_url();?>assets/datatable/css/style.css">
<script src="<?php echo site_url();?>assets/datatable/js/index.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='http://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='http://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>
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
    <h3 class="w3-center">People Data</h3>
    <p>
        <table summary="This table shows details from the sqlite database" class="table table-bordered table-hover dt-responsive">
            <caption class="text-center">Details </caption>
            <thead>
              <tr>
                <th>S/N</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <!-- <th>Value</th>
                <th>Link</th>
                <th>Details</th>
                <th>Action</th> -->
              </tr>
            </thead>
            <tbody>
            <?php 
                $sn = 0;
                foreach ($results as $result) {
                    $sn++
            ?>
              <tr>
                <td><?php echo $sn ?></td>
                <td><?php echo $result->fullname?></td>
                <td><?php echo $result->email?></td>
                <!-- <td></td>
                <td></td>
                <td></td>
                <td></td> -->
              </tr>
            <?php }
            ?>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="5" class="text-center"><a href="#" target="_blank">Seedstar PHP Challenge</a> </td>
              </tr>
            </tfoot>
        </table>
    </p>
</div>
</div>

<!-- Footer -->
<footer class="w3-center w3-dark-grey w3-padding-48 w3-hover-black">
  <p>Powered by <a href="#" title="" target="_blank" class="w3-hover-opacity">#RazNerd Inc. :)</a></p>
</footer>
 
</body>

</html>