<!DOCTYPE html>
<?php
   include 'db_connect.php';
   function Validate($data){
     $data= trim($data);
     $data = stripslashes($data);
     $data=htmlspecialchars($data);
     return $data;
   }
   session_start();
   $error='';
   $count=0;
   if (isset($_SESSION['login_user'])) {
     header("Location:index.php");
   }
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form
      $number = Validate($_POST['number']);
      $password = md5($_POST['password']);
      if(isset($_POST['category']))
      {
        $category=$_POST['category'];
      }
      if($category == 'buyerdb')
      {
        $sql = "SELECT *
        FROM buyerdb
        WHERE buyerdb.bMobNo='$number' AND buyerdb.password='$password'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['id'];
        $count = mysqli_num_rows($result);
        $_SESSION['category']=$category;
        $_SESSION['fname']=$row['firstName'];
        $_SESSION['lname']=$row['lastName'];
        $_SESSION['mobile']=$row['bMobNo'];
        $_SESSION['address']=$row['addressBuyer'];
        $_SESSION['pincode']=$row['zipcode'];
        $_SESSION['bid']=$row['BID'];
        if($count == 1)
        {
           $_SESSION['login_user'] = $number;
           header("Location: index.php");
        }
      }
      if($category == 'communorg')
      {
        $sql = "SELECT *
        FROM communorg
        WHERE communorg.mbNo='$number' AND communorg.password='$password'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['id'];
        $count = mysqli_num_rows($result);
        $_SESSION['category']=$category;
        $_SESSION['fname']=$row['firstName'];
        $_SESSION['lname']=$row['lastName'];
        $_SESSION['mobile']=$row['mbNo'];
        if($count == 1)
        {

           $_SESSION['login_user'] = $number;
           header("Location: index.php");
        }
      }
      if($category == 'aggregator')
      {
        $sql = "SELECT *
        FROM aggregator
        WHERE aggregator.bMobNo='$number' AND aggregator.password='$password'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['id'];
        $count = mysqli_num_rows($result);
        $_SESSION['category']=$category;
        $_SESSION['fname']=$row['firstName'];
        $_SESSION['lname']=$row['lastName'];
        $_SESSION['mobile']=$row['bMobNo'];

        if($count == 1)
        {

           $_SESSION['login_user'] = $number;
           header("Location: index.php");
        }
      }
      if($category == 'medexpertdb')
      {
        $sql = "SELECT *
        FROM medexpertdb
        WHERE medexpertdb.mbNo='$number' AND medexpertdb.password='$password'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['id'];
        $count = mysqli_num_rows($result);
        $_SESSION['category']=$category;
        $_SESSION['fname']=$row['firstName'];
        $_SESSION['lname']=$row['lastName'];
        $_SESSION['mobile']=$row['mbNo'];
        $_SESSION['specialization']=$row['specialization'];

        if($count == 1)
        {

           $_SESSION['login_user'] = $number;
           header("Location: index.php");
        }
      }
      if($category == 'sellerdb')
      {
        $sql = "SELECT *
        FROM sellerdb
        WHERE sellerdb.sMobNo='$number' AND sellerdb.password='$password'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['id'];
        $count = mysqli_num_rows($result);
        $_SESSION['SID']=$row['SID'];

        $_SESSION['category']=$category;
        $_SESSION['fname']=$row['firstName'];
        //echo "<em> fname = $_SESSION['fname'] </em>";
        $_SESSION['lname']=$row['lastName'];
        $_SESSION['mobile']=$row['sMobNo'];
        $_SESSION['address']=$row['addressSeller'];
        $_SESSION['pincode']=$row['zipcode'];
        if($count == 1)
        {

           $_SESSION['login_user'] = $number;
           header("Location: index.php");
        }
      }
      if($category == 'admindb')
      {
        $sql = "SELECT *
        FROM admindb a
        WHERE a.num='$number' AND a.password='$password'";
        echo $sql;
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['id'];
        $count = mysqli_num_rows($result);
        $_SESSION['category']=$category;
        $_SESSION['fname']=$row['Firstname'];
        $_SESSION['lname']=$row['lastname'];
        $_SESSION['num']=$row['num'];
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];
        if($count == 1)
        {
           $_SESSION['login_user'] = $number;
           header("Location: index.php");
        }
      }
      /*$result = mysqli_query($connection,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['id'];
      $count = mysqli_num_rows($result);
      $_SESSION['category']=$category;*/
      // If result matched $number and $mypassword, table row must be 1 row

      /*if($count == 1)
      {

         $_SESSION['login_user'] = $number;
         header("Location: index.php");
      }*/
      if($count<=0)
      {
         $error = '<span style="color:red;text-align:center;">Your Login Name or Password is invalid';
      }
   }
?>

<html lang="en" >

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">


</head>

<body>

    <div class="login-form col-sm-12 col-md-6 col-md-offset-4">
    <form  method="post" action="">
     <h1 >Krishiyog Login</h1>
     <div class="form-group ">
       <input type="number" name="number" class="form-control" aria-describedby="number" placeholder="Contact Number" id="number" required>
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" name="password" class="form-control" id="password" placeholder="Password">
       <i class="fa fa-lock"></i>
     </div>
     <div class="form-group" style="text-align:center;">

       <!--<input type="radio" class="form-control"name="category" value="sellerdb" required>Farmer/Producer/Processor<br>
       <b>Buyer/Consumer</b>
       <input type="radio" class="form-control form-control-sm" name="category" value="buyerdb" required>
       <b>Aggregator</b>
       <input type="radio" class="form-control form-control-sm" name="category" value="aggregator"required >
       <b>Community</b>
       <input type="radio" class="form-control form-control-sm"name="category" value="communorg"required>
       <b>Wellness Advisor</b>
       <input type="radio" class="form-control form-control-sm" name="category" value="medexpertdb"required>-->
       <!-- <small id="number" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
       <select class="form-control" name="category">
          <option  value="sellerdb">Farmer/Producer/Processor</option>
          <option  value="buyerdb">Buyer/Consumer</option>
          <option  value="aggregator">Aggregator</option>
          <option value="communorg">Community</option>
          <option  value="medexpertdb">Wellness Advisor</option>
          <option value="admindb"> Admin</option>
        </select>
     </div>
     <div style="text-align:center;">  <span><?php echo $error; ?></span></div>


     <button type="submit" name="login" class="log-btn" >Log in</button>
     <p class="message">Forgot password? <a href="pwdreset.php">Enter new password</a></p>
<p class="message">Not registered? <a href="signup2.php">Create an account</a></p>

</form>
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script  src="js/login.js"></script>




</body>

</html>
