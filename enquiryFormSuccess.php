<!DOCTYPE html>
<?php
include 'trans_id.php';
session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>KrishiYog | Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <style media="screen">


  .shadow {
box-shadow: 0px 11px 15px -7px rgba(0, 0, 0, 0.2), 0px 24px 38px 3px rgba(0, 0, 0, 0.14), 0px 9px 46px 8px rgba(0, 0, 0, 0.12);    transition: box-shadow 0.28s cubic-bezier(0.4, 0, 0.2, 1);
}
body {
  background: url(grass.JPG) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
  </style>
  <body>

<div style="width:65%;margin-top:100px;" class="shadow p-3 mb-5 bg-white rounded container" style="margin-bottom:50px;">

 <center><h1>Your enquiry has been been successfully recorded</h1></center>
<center >
  <img  src="checked.png" alt="" height="100">
  <h4>Transaction id:<?php echo $_SESSION['tid']; ?></h4>
  <h6>Download our app</h6>
</center>
  <center>
  <a href="https://play.google.com/store/apps/details?id=com.krishiyog.krishi_udyog" target="_blank"><img src="http://www.niftybuttons.com/googleplay/googleplay-button1.png" alt="Get on Google Play (Button via NiftyButtons.com)"></a><br>

</center>
<!-- <center> -->
<a href="index.php"><button type="button"  class="btn btn-success" name="button">Continue</button></a>

<!-- </center> -->

</div>
  </body>
</html>
