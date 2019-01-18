<?php




function getTransId($NoItems)
{
  include 'db_connect.php';

  $sql="SELECT * FROM buyerdb WHERE BID='".$_SESSION['bid']."'";

  $RES= mysqli_query($connection,$sql);
  $row = mysqli_fetch_assoc($RES);
  $ci=$row['city'];

  $zip=$row['zipcode'];

  $ci=substr(strtoupper($ci),0,3);
  $pin=$zip;
  $it=$NoItems;

  $m=date('m');
  $y=date('y');
  $d=date('d');
  $final_id = $ci.$pin.$it;

  return $final_id;
}


 ?>
