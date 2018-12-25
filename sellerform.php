<?php
session_start();
include 'loggedInCheck.php';
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


	<style>
.filterDiv {
  float: left;
  border-radius: 30px;
  background-color:#CD853F;
  color: #ffffff;
  width: 100%;
  line-height: 80px;
  text-align: center;
  margin: 30px;
  display: none;
  color: black;
}
.show {
  display: block;
}
.container {
  margin-top: 20px;
  overflow: hidden;
}
/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}
.btn:hover {
  background-color: #ddd;
}
.btn.active {
  background-color: #666;
  color: white;
}
</style>

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123909367-1"></script>
<script type="text/javascript">
function validate() {
  var	ifsc = $("#ifsc").val();
  var ifscChecker = /^[A-Z|a-z]{4}[0][\d]{6}$/;
  var accountNumber = $("#accountNumber").val();
  var accountNumberChecker = /^\d{9,18}$/;
  /*if (!ifscChecker.test(ifsc)) {
    $("#errorifsc").html("Invalid IFSC code");
    document.getElementById('errorifsc').style.color="red";
  }else {
    $("#errorifsc").html("");
  }*/
  /*if (!accountNumberChecker.test(accountNumber)) {
    $("#erroraccountNumber").html("Invalid Account Number");
    document.getElementById('erroraccountNumber').style.color="red";
  }else {
    $("#erroraccountNumber").html("");
  }*/
  if ( document.sellerForm.gst.value.length!=15) {
         document.sellerForm.gst.focus() ;
         document.getElementById('errorsgst').innerHTML="Enter gst with 15 digits";
         document.getElementById('gst').style.color="red";
      return false;
  }
  if (document.sellerForm.tan.value.length!=10) {
         document.sellerForm.tan.focus() ;
         document.getElementById('errorstan').innerHTML="Enter tan with 10 digits";
         document.getElementById('tan').style.color="red";
      return false;
  }
  if (document.sellerForm.pan.value.length!=16) {
         document.sellerForm.pan.focus() ;
         document.getElementById('errorspan').innerHTML="Enter pan with 16 digits";
         document.getElementById('pan').style.color="red";
      return false;
  }
  return true;
}
</script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-123909367-1');
</script>

</head>
<body>
  <nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
      <div class="row">
        <div class="col-xs-2">
          <div id="gtco-logo"><a href="index.php"><img src="images/logo0.jpg" style="max-width:300px;max-height: 100px;margin-top:-15px;margin-left:-30px"/></a></div>
        </div>
        <div class="col-xs-10 text-center menu-1">
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
    </nav>


    <div style="margin-top:150px;margin-left:30px;margin-right:30px;">
      <div><h3>Seller Enquiry Form</h3></div>
    						<?php
                if ($_SESSION['category'] == 'sellerdb') {
                //  echo "<em> login_user = ". $_SESSION['login_user'] ." </em>";
                //  echo "<em> SID = ".$_SESSION['SID'] . "</em>";
                  echo "<div class='row'>
                          <div class='col-md-6'>
                            Name: ".$_SESSION['fname']." ".$_SESSION['lname']."
                          </div>
                          <div class='col-md-6'>
                            Contact Number: ".$_SESSION['mobile']."
                          </div>
                        </div>
                        <div class='row'>
                                <div class='col-md-6'>
                                  Address: ".$_SESSION['address']."
                                </div>
                                <div class='col-md-6'>
                                  Pincode: ".$_SESSION['pincode']."
                                </div>
                              </div>
                   ";
                }
                ?>
              </div>
               <hr>
             <form name="sellerForm" action="sellerEnqdb.php" onsubmit="return(validate())" method="post" style="padding:10px;margin-left:30px;margin-right:30px;">
              <!-- <div class="row form-group">

                 <div class="row form-group" style="text-align:center;">
                   <div class="col-md-6 col-md-offset-3" >
                   <select name="farming_type" class="form-control"  required>
                     <option selected disabled="disabled">Farming type</option>
                       <option value="Natural Farming(ZBNF)">Natural Farming(ZBNF)</option>
                       <option value="Group Organic Certified">Group Organic Certified</option>
                       <option value="Organic PGS">Organic PGS</option>
                       <option value="Organic(Self Certified)">Organic(Self Certified)</option>
                     <option value="Organic(Not Certified)">Organic(Not Certified)</option>
                     <option value="conventional">Conventional</option>

                   </select>
                   </div>

                 </div>
               </div>-->
				 </form>



<div style="font-size:40px;">Farming type</div>

<div id="myBtnContainer">
	 <label style="font-size:15px;"><input class="btn active" onclick="filterSelection('all')" type="radio" name="fl-colour"  /> Show all</label><br>
	 <label style="font-size:15px;"><input class="btn active" onclick="filterSelection('natural')" type="radio" name="fl-colour"/> Natural Farming(ZBNF)</label><br>
	 <label style="font-size:15px;"><input class="btn active" onclick="filterSelection('group')" type="radio" name="fl-colour"  />Group Organic Certified</label><br>
	 <label style="font-size:15px;"><input class="btn active" onclick="filterSelection('pgs')" type="radio" name="fl-colour"  /> Organic PGS</label><br>
	 <label style="font-size:15px;"><input class="btn active" onclick="filterSelection('self')" type="radio" name="fl-colour" /> Organic(Self Certified</label><br>
	 <label style="font-size:15px;"><input class="btn active" onclick="filterSelection('organic')" type="radio" name="fl-colour"  />Organic(Not Certified)</label><br>
	 <label style="font-size:15px;"><input class="btn active" onclick="filterSelection('conventional')" type="radio" name="fl-colour"  /> Conventional</label><br>

</div>

<div class="container">
  <?php
                include 'db_connect.php';
                $sql_b = "SELECT bp.item, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id
                FROM buyerdb b, buyerproduct bp
                WHERE bp.BID=b.BID";
                $result_b = mysqli_query($connection,$sql_b);
                $c=0;
                $c=@mysqli_num_rows($result_b);
                if($c>0)
                {
                  while($row = $result_b->fetch_assoc())
                  {
					  /*Akshay:design that particular format in the division below  and remaining is copy paste*/
                    echo "  <div class='filterDiv row'>
							<div class='col-md-12'> ".$row['uniqueid']."</div>
							<div class='row'>
							<div class='col-md-2'>ITEM</div>
                             <div class='col-md-2'>UNIT</div>
                             <div class='col-md-2'> DURATION</div>
                             <div class='col-md-2'></div>
							 </div>
                            <div class='row'>
							<div class='col-md-2'> ".$row['item']."</div>
                             <div class='col-md-2'> ".$row['unit']."</div>
                             <div class='col-md-2'> ".$row['duration']."</div>
                             <div class='col-md-4'>
                             <form action= 'sellerformdb.php' method='post'>
                           <input style='float:right' type='text'  name='price' placeholder='Enter your price' value='' required>
                           <i class='fa fa-inr'></i>
                           </div>
                           <input type='hidden' name='item' value=".$row['item'].">
                           <input type='hidden' name='unit' value=".$row['unit'].">
                           <input type='hidden' name='duration' value=".$row['duration'].">
                           <input type='hidden' name='id' value=".$row['id'].">
                           <input type='hidden' name='bid' value=".$row['BID'].">

                            <button  type='submit' class='col-md-2 btn btn-primary' style='color:black;float:none;' onsubmit='sellerformdb.php' >QUOTE<i class='fa fa-inr'></i></button>
                            </form>
							 </div>
							</div>
                          ";
                   }
                 }
  						 ?>
	<?php
                include 'db_connect.php';
                $sql_b = "SELECT bp.item, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id
                FROM buyerdb b, buyerproduct bp
                WHERE bp.BID=b.BID AND ftype='Natural Farming(ZBNF)'";										/*Roopali and Sankalp sql logic:select item ,unit ,duration from buyerproduct table AND
																	select uniqueid(manually enter the values) from buyerdb table through BID WHERE ftype="Natural Farming"*/
                $result_b = mysqli_query($connection,$sql_b);
                $c=0;
                $c=@mysqli_num_rows($result_b);
                if($c>0)
                {
                  while($row = $result_b->fetch_assoc())
                  {
					  /*This particular class below in div(natural) differentiates between farming type*/
            echo "  <div class='filterDiv natural'>
      <div class='col-md-12'> ".$row['uniqueid']."</div>
      <div class='row'>
      <div class='col-md-2'> ITEM</div>
                     <div class='col-md-2'> UNIT</div>
                     <div class='col-md-2'>DURATION</div>
                     <div class='col-md-2'></div>
       </div>
                    <div class='row'>
      <div class='col-md-2'> ".$row['item']."</div>
                     <div class='col-md-2'> ".$row['unit']."</div>
                     <div class='col-md-2'> ".$row['duration']."</div>
                     <div class='col-md-4'>
                       <form action= 'sellerformdb.php' method='post'>
                     <input style='float:right' type='text'  name='price' placeholder='Enter your price' value='' required>
                     <i class='fa fa-inr'></i>
                     </div>
                     <input type='hidden' name='item' value=".$row['item'].">
                     <input type='hidden' name='unit' value=".$row['unit'].">
                     <input type='hidden' name='duration' value=".$row['duration'].">
                     <input type='hidden' name='id' value=".$row['id'].">
                     <input type='hidden' name='bid' value=".$row['BID'].">

                      <button  type='submit' class='col-md-2 btn btn-primary' style='color:black;float:none;' onsubmit='sellerformdb.php' >QUOTE<i class='fa fa-inr'></i></button>
                      </form>
       </div>
      </div>
                  ";
                   }
                 }
  						 ?>
               <?php
                             include 'db_connect.php';
                             $sql_b = "SELECT bp.item, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id
                             FROM buyerdb b, buyerproduct bp
                             WHERE bp.BID=b.BID AND ftype='Group Organic Certified'";										/*Roopali and Sankalp sql logic:select item ,unit ,duration from buyerproduct table AND
             																	select uniqueid(manually enter the values) from buyerdb table through BID WHERE ftype="Natural Farming"*/
                             $result_b = mysqli_query($connection,$sql_b);
                             $c=0;
                             $c=@mysqli_num_rows($result_b);
                             if($c>0)
                             {
                               while($row = $result_b->fetch_assoc())
                               {
             					  /*This particular class below in div(natural) differentiates between farming type*/
                         echo "  <div class='filterDiv group'>
                   <div class='col-md-12'> ".$row['uniqueid']."</div>
                   <div class='row'>
                   <div class='col-md-2'> ITEM</div>
                                  <div class='col-md-2'> UNIT</div>
                                  <div class='col-md-2'>DURATION</div>
                                  <div class='col-md-2'></div>
                    </div>
                                 <div class='row'>
                   <div class='col-md-2'> ".$row['item']."</div>
                                  <div class='col-md-2'> ".$row['unit']."</div>
                                  <div class='col-md-2'> ".$row['duration']."</div>
                                  <div class='col-md-4'>
                                  <form action= 'sellerformdb.php' method='post'>
                                  <input style='float:right' type='text'  name='price' placeholder='Enter your price' value='' required>
                                  <i class='fa fa-inr'></i>
                                  </div>
                                  <input type='hidden' name='item' value=".$row['item'].">
                                  <input type='hidden' name='unit' value=".$row['unit'].">
                                  <input type='hidden' name='duration' value=".$row['duration'].">
                                  <input type='hidden' name='id' value=".$row['id'].">
                                  <input type='hidden' name='bid' value=".$row['BID'].">

                                  <button  type='submit' class='col-md-2 btn btn-primary' style='color:black;float:none;' onsubmit='sellerformdb.php' >QUOTE<i class='fa fa-inr'></i></button>
                                  </form>
                    </div>
                   </div>
                               ";
                                }
                              }
               						 ?>

                           <?php
                                         include 'db_connect.php';
                                         $sql_b = "SELECT bp.item, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id
                                         FROM buyerdb b, buyerproduct bp
                                         WHERE bp.BID=b.BID AND ftype='Organic PGS'";										/*Roopali and Sankalp sql logic:select item ,unit ,duration from buyerproduct table AND
                         																	select uniqueid(manually enter the values) from buyerdb table through BID WHERE ftype="Natural Farming"*/
                                         $result_b = mysqli_query($connection,$sql_b);
                                         $c=0;
                                         $c=@mysqli_num_rows($result_b);
                                         if($c>0)
                                         {
                                           while($row = $result_b->fetch_assoc())
                                           {
                         					  /*This particular class below in div(natural) differentiates between farming type*/
                                     echo "  <div class='filterDiv pgs'>
                               <div class='col-md-12'> ".$row['uniqueid']."</div>
                               <div class='row'>
                               <div class='col-md-2'> ITEM</div>
                                              <div class='col-md-2'> UNIT</div>
                                              <div class='col-md-2'>DURATION</div>
                                              <div class='col-md-2'></div>
                                </div>
                                             <div class='row'>
                               <div class='col-md-2'> ".$row['item']."</div>
                                              <div class='col-md-2'> ".$row['unit']."</div>
                                              <div class='col-md-2'> ".$row['duration']."</div>
                                              <div class='col-md-4'>
                                              <form action= 'sellerformdb.php' method='post'>
                                            <input style='float:right' type='text'  name='price' placeholder='Enter your price' value='' required>
                                            <i class='fa fa-inr'></i>
                                            </div>
                                            <input type='hidden' name='item' value=".$row['item'].">
                                            <input type='hidden' name='unit' value=".$row['unit'].">
                                            <input type='hidden' name='duration' value=".$row['duration'].">
                                            <input type='hidden' name='id' value=".$row['id'].">
                                            <input type='hidden' name='bid' value=".$row['BID'].">

                                             <button  type='submit' class='col-md-2 btn btn-primary' style='color:black;float:none;' onsubmit='sellerformdb.php' >QUOTE<i class='fa fa-inr'></i></button>
                                             </form>
                                </div>
                               </div>
                                           ";
                                            }
                                          }
                           						 ?>

                                       <?php
                                                     include 'db_connect.php';
                                                     $sql_b = "SELECT bp.item, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id
                                                     FROM buyerdb b, buyerproduct bp
                                                     WHERE bp.BID=b.BID AND ftype='Organic(Self Certified)'";										/*Roopali and Sankalp sql logic:select item ,unit ,duration from buyerproduct table AND
                                     																	select uniqueid(manually enter the values) from buyerdb table through BID WHERE ftype="Natural Farming"*/
                                                     $result_b = mysqli_query($connection,$sql_b);
                                                     $c=0;
                                                     $c=@mysqli_num_rows($result_b);
                                                     if($c>0)
                                                     {
                                                       while($row = $result_b->fetch_assoc())
                                                       {
                                     					  /*This particular class below in div(natural) differentiates between farming type*/
                                                 echo "  <div class='filterDiv self'>
                                           <div class='col-md-12'> ".$row['uniqueid']."</div>
                                           <div class='row'>
                                           <div class='col-md-2'> ITEM</div>
                                                          <div class='col-md-2'> UNIT</div>
                                                          <div class='col-md-2'>DURATION</div>
                                                          <div class='col-md-2'></div>
                                            </div>
                                                         <div class='row'>
                                           <div class='col-md-2'> ".$row['item']."</div>
                                                          <div class='col-md-2'> ".$row['unit']."</div>
                                                          <div class='col-md-2'> ".$row['duration']."</div>
                                                          <div class='col-md-4'>
                                                          <form action= 'sellerformdb.php' method='post'>
                                                        <input style='float:right' type='text'  name='price' placeholder='Enter your price' value='' required>
                                                        <i class='fa fa-inr'></i>
                                                        </div>
                                                        <input type='hidden' name='item' value=".$row['item'].">
                                                        <input type='hidden' name='unit' value=".$row['unit'].">
                                                        <input type='hidden' name='duration' value=".$row['duration'].">
                                                        <input type='hidden' name='id' value=".$row['id'].">
                                                        <input type='hidden' name='bid' value=".$row['BID'].">

                                                         <button  type='submit' class='col-md-2 btn btn-primary' style='color:black;float:none;' onsubmit='sellerformdb.php' >QUOTE<i class='fa fa-inr'></i></button>
                                                         </form>
                                            </div>
                                           </div>
                                                       ";
                                                        }
                                                      }
                                       						 ?>

                                                   <?php
                                                                 include 'db_connect.php';
                                                                 $sql_b = "SELECT bp.item, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id
                                                                 FROM buyerdb b, buyerproduct bp
                                                                 WHERE bp.BID=b.BID AND ftype='Organic(Not Certified)'";										/*Roopali and Sankalp sql logic:select item ,unit ,duration from buyerproduct table AND
                                                 																	select uniqueid(manually enter the values) from buyerdb table through BID WHERE ftype="Natural Farming"*/
                                                                 $result_b = mysqli_query($connection,$sql_b);
                                                                 $c=0;
                                                                 $c=@mysqli_num_rows($result_b);
                                                                 if($c>0)
                                                                 {
                                                                   while($row = $result_b->fetch_assoc())
                                                                   {
                                                 					  /*This particular class below in div(natural) differentiates between farming type*/
                                                             echo "  <div class='filterDiv organic'>
                                                       <div class='col-md-12'> ".$row['uniqueid']."</div>
                                                       <div class='row'>
                                                       <div class='col-md-2'> ITEM</div>
                                                                      <div class='col-md-2'> UNIT</div>
                                                                      <div class='col-md-2'>DURATION</div>
                                                                      <div class='col-md-2'></div>
                                                        </div>
                                                                     <div class='row'>
                                                       <div class='col-md-2'> ".$row['item']."</div>
                                                                      <div class='col-md-2'> ".$row['unit']."</div>
                                                                      <div class='col-md-2'> ".$row['duration']."</div>
                                                                      <div class='col-md-4'>
                                                                      <form action= 'sellerformdb.php' method='post'>
                                                                    <input style='float:right' type='text'  name='price' placeholder='Enter your price' value='' required>
                                                                    <i class='fa fa-inr'></i>
                                                                    </div>
                                                                    <input type='hidden' name='item' value=".$row['item'].">
                                                                    <input type='hidden' name='unit' value=".$row['unit'].">
                                                                    <input type='hidden' name='duration' value=".$row['duration'].">
                                                                    <input type='hidden' name='id' value=".$row['id'].">
                                                                    <input type='hidden' name='bid' value=".$row['BID'].">

                                                                     <button  type='submit' class='col-md-2 btn btn-primary' style='color:black;float:none;' onsubmit='sellerformdb.php' >QUOTE<i class='fa fa-inr'></i></button>
                                                                     </form>
                                                        </div>
                                                       </div>
                                                                   ";
                                                                    }
                                                                  }
                                                   						 ?>

                                                               <?php
                                                                             include 'db_connect.php';
                                                                             $sql_b = "SELECT bp.item, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id
                                                                             FROM buyerdb b, buyerproduct bp
                                                                             WHERE bp.BID=b.BID AND ftype='conventional'";										/*Roopali and Sankalp sql logic:select item ,unit ,duration from buyerproduct table AND
                                                             																	select uniqueid(manually enter the values) from buyerdb table through BID WHERE ftype="Natural Farming"*/
                                                                             $result_b = mysqli_query($connection,$sql_b);
                                                                             $c=0;
                                                                             $c=@mysqli_num_rows($result_b);
                                                                             if($c>0)
                                                                             {
                                                                               while($row = $result_b->fetch_assoc())
                                                                               {
                                                             					  /*This particular class below in div(natural) differentiates between farming type*/
                                                                         echo "  <div class='filterDiv conventional'>
                                                                   <div class='col-md-12'> ".$row['uniqueid']."</div>
                                                                   <div class='row'>
                                                                   <div class='col-md-2'> ITEM</div>
                                                                                  <div class='col-md-2'> UNIT</div>
                                                                                  <div class='col-md-2'>DURATION</div>
                                                                                  <div class='col-md-2'></div>
                                                                    </div>
                                                                                 <div class='row'>
                                                                   <div class='col-md-2'> ".$row['item']."</div>
                                                                                  <div class='col-md-2'> ".$row['unit']."</div>
                                                                                  <div class='col-md-2'> ".$row['duration']."</div>
                                                                                  <div class='col-md-4'>
                                                                                  <form action= 'sellerformdb.php' method='post'>
                                                                                <input style='float:right' type='text'  name='price' placeholder='Enter your price' value='' required>
                                                                                <i class='fa fa-inr'></i>
                                                                                </div>
                                                                                <input type='hidden' name='item' value=".$row['item'].">
                                                                                <input type='hidden' name='unit' value=".$row['unit'].">
                                                                                <input type='hidden' name='duration' value=".$row['duration'].">
                                                                                <input type='hidden' name='id' value=".$row['id'].">
                                                                                <input type='hidden' name='bid' value=".$row['BID'].">

                                                                                 <button  type='submit' class='col-md-2 btn btn-primary' style='color:black;float:none;' onsubmit='sellerformdb.php' >QUOTE<i class='fa fa-inr'></i></button>
                                                                                 </form>
                                                                    </div>
                                                                   </div>
                                                                               ";
                                                                                }
                                                                              }
                                                               						 ?>

</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}
// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

    </body>
  </html>
