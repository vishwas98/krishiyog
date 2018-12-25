
<?php
session_start();
include 'loggedInCheck.php';
include 'db_connect.php';
 ?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Krishiyog Naturals &mdash;Seed to wellness</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">




  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
  <!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123909367-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-123909367-1');
</script>
<style>
button {
  background-color: transparent;
  background-repeat:no-repeat;
  border: none;
  cursor:pointer;
  overflow: hidden;
  outline:none;
}
.control-label{
  float:left;

  margin-top: 10px;
}
</style>

</head>
<body>
  <nav class="gtco-nav fixed-top" role="navigation">
    <div class="gtco-container">
      <div class="row">
        <div class="col-xs-2">
          <div id="gtco-logo"><a href="index.php"><img src="images/logo0.jpg" style="max-width:300px;max-height: 100px;margin-top:-15px;margin-left:-30px"/></a></div>
        </div>
        <div class="col-xs-10 text-center menu-1 ">
          <ul>
            <span class="icon">
              <li><a class="active" href="index.php"><i class="icon-home"></i></a></li>
            </span>
              <li><a href="about.php"><b>About</a></b></li>
              <li><a class="nat-farm"><b>Natural Farming</a></b></li>
              <li><a href="resource.php"><b>Resources</a></b></li>
              <li><a href="contact.php"><b>Contact us</a></b></li>
              <li><?php if(!isset($_SESSION['login_user']) && !isset($_SESSION['category']))
                    {

                      echo "<li><a href='login.php'><b>LOGIN</b></a></li>";
                      echo "<li><a href='signup2.php'><b>REGISTER</b></a></li>";
                    }
                    else if(isset($_SESSION['login_user']) && isset($_SESSION['category']))
                    {

                      echo "<li><a href='logout.php'><b>Logout</b></a></li>";

                      echo "<li><b>Welcome ".$_SESSION['fname']."!!</b></li>";
                    }
              ?></li>
            </ul>




        </div>


  </div>
      </div>
			</nav>
			<br/><br/><br/><br/><br/><br/><br/>
      			<div class="row">
				<div class="col-md-6">
       <h1> Seller List</h1>

          <form action="sprofile.php" method="post">

                <?php

				$sql = "SELECT *
				FROM sellerdb";
				//echo "$sql";
				$result = mysqli_query($connection,$sql);
			//	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				///echo $result;
				$count = mysqli_num_rows($result);
        $count1=1;
				if($count>0)
				{
					while($res=mysqli_fetch_assoc($result))
					{
            /*$_SESSION['fname']=$res['firstName'];
            $_SESSION['lname']=$res['lastName'];
            $_SESSION['onum']=$res['orgMobNo'];
            $_SESSION['wnum']=$res['WhatsApp'];
            $_SESSION['snum']=$res['sMobNo'];
            $_SESSION['addrS']=$res['addressSeller'];
            $_SESSION['semail']=$res['email'];
            $_SESSION['scity']=$res['city'];
            $_SESSION['sstate']=$res['state'];
            $_SESSION['stype']=$res['sellerType'];
            $_SESSION['stan']=$res['TANo'];
            $_SESSION['span']=$res['PAN'];
            $_SESSION['sgst']=$res['GST'];
            $_SESSION['szipcode']=$res['zipcode'];
            $_SESSION['sdesc']=$res['descr'];*/

							//echo "<div>".$count1.". ".$res['firstName']." ".$res['lastName']."</div>";
              $fname =$res['firstName'];
              $lname =$res['lastName'];

              ?>

              <form action= "sprofile.php" method="post">

                  <input type="hidden" name="fname" value="<?php echo $fname; ?>">
                  <input type="hidden" name="lname" value="<?php echo $lname; ?>">

                <button type="submit" value="submit"> <?php echo "<div>".$count1.". ".$res['firstName']." ".$res['lastName']."</div>";?></button>

              </form>

              <?php
              $count1++;

					}
				}
			//	echo $row['firstName'];
			/*	foreach($row as $value){
				echo $value;

				}
			/*	for ($x=0; $x<=$count; $x++){
					echo "<div>".$row['firstName']." ".$row['lastName']."</div>";
				}

				echo "fkjdnflskdvn";*/


				?>

        </div>



				<div class="col-md-6">
          <h1>Buyer List</h1>
				<?php


				$sql = "SELECT *
				FROM buyerdb";
				//echo "$sql";
				$result = mysqli_query($connection,$sql);
			//	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				///echo $result;
				$count = mysqli_num_rows($result);
        $count1=1;
				if($count>0)
				{
					while($res=mysqli_fetch_assoc($result))
					{
          /*  $_SESSION['fName']=$res['firstName'];
            $_SESSION['lName']=$res['lastName'];
            $_SESSION['oNum']=$res['orgMobNo'];
            $_SESSION['wNum']=$res['WhatsApp'];
            $_SESSION['sNum']=$res['bMobNo'];
            $_SESSION['addrB']=$res['addressBuyer'];
            $_SESSION['bemail']=$res['email'];
            $_SESSION['bcity']=$res['city'];
            $_SESSION['bstate']=$res['state'];
            $_SESSION['btype']=$res['buyerType'];
            $_SESSION['btan']=$res['TANo'];
            $_SESSION['bpan']=$res['PAN'];
            $_SESSION['bgst']=$res['GST'];
            $_SESSION['bzipcode']=$res['zipcode'];
            $_SESSION['bdesc']=$res['descr'];*/
							//echo "<div>".$res['firstName']." ".$res['lastName']."</div>";

              $fName =$res['firstName'];
              $lName =$res['lastName'];

              ?>

              <form action= "bprofile.php" method="post">

                  <input type="hidden" name="fName" value="<?php echo $fName; ?>">
                  <input type="hidden" name="lName" value="<?php echo $lName; ?>">


                <button type="submit" value="submit"><?php echo "<div>".$count1.". ".$res['firstName']." ".$res['lastName']."</div>";?> </button>
              </form>

              <?php
                $count1++;
					}
				}
			//	echo $row['firstName'];
			/*	foreach($row as $value){
				echo $value;

				}
			/*	for ($x=0; $x<=$count; $x++){
					echo "<div>".$row['firstName']." ".$row['lastName']."</div>";
				}

				echo "fkjdnflskdvn";*/


				?></div>
			</div>






	  </body>
	</html>
