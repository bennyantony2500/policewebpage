<?php
$user='root';
$pass='';
$db='judge';
$name = $_POST['Loanid'];
$cust1=$_POST['Customer-id'];
$conn=new mysqli('localhost',$user,$pass,$db);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$ctr=0;
$sql = "SELECT * FROM judge";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 // output data of each row
 while($row = $result->fetch_assoc()) {
 if($name==$row["pass"] )
 {

 $cust=$row["user"];
 if($cust==$cust1)
 {
 $ctr=1;
/* $ty=$row["Loan_type"];
 $am=$row["Loan_Amount"];
$emi=$row["EMI"];
 $tenure=$row["Tenure"];
 $date=$row["Date"];
 $status=$row["Status"];
 $cust=$row["Customer_id"];*/
break;
 }

 }

 }
} else {
 echo "0 results";
}
if($ctr==0)
{
//echo"not matching";
}
else
{
// $name1=$name;
//echo"present";
$sql = "INSERT INTO pol(user) VALUES ('$name')";
$result = $conn->query($sql);
}
$sql = "INSERT INTO pol(user) VALUES (abc3)";
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"
href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the
sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
 <!-- Avatar image in top left corner -->

 <a href="police2.html" class="w3-bar-item w3-button w3-padding-large
w3-hover-black">
 <i class="fa fa-home w3-xxlarge"></i>
 <p>HOME</p>
 </a>
 <a href="hellopol3.html" class="w3-bar-item w3-button w3-padding-large
w3-hover-black">
 <i class="fa fa-male w3-xxlarge"></i>
 <p>Police Official</p>
 </a>
 <a href="compchoice.html" class="w3-bar-item w3-button w3-paddinglarge w3-hover-black">
 <i class="material-icons">person</i>
 <p>Public</p>
 </a>
 <a href="verju.html" class="w3-bar-item w3-button w3-padding-large w3-
hover-black">
 <i class='fas fa-user-graduate' style='font-size:24px'></i>
 <p>Judge or higher official</p>
 </a>
 <a href="about.html" class="w3-bar-item w3-button w3-padding-large w3-
hover-black">
 <i class="fa fa-user w3-xxlarge"></i>
 <p>ABOUT</p>
 </a>
 <a href="photos.html" class="w3-bar-item w3-button w3-padding-large
w3-hover-black">
 <i class="fa fa-eye w3-xxlarge"></i>
 <p>PHOTOS</p>
 </a>
 <a href="contact.html" class="w3-bar-item w3-button w3-padding-large
w3-hover-black">
 <i class="fa fa-envelope w3-xxlarge"></i>
 <p>CONTACT</p>
 </a>
</nav>
<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
 <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center
w3-small">
 <a href="police.html" class="w3-bar-item w3-button" style="width:25%
!important">HOME</a>
<a href="polchoice.html" class="w3-bar-item w3-button"
style="width:25% !important">Police Official</a>
<a href="compchoice.html" class="w3-bar-item w3-button"
style="width:25% !important" >Public</a>
 <a href="#about" class="w3-bar-item w3-button" style="width:25%
!important">ABOUT</a>
 <a href="#photos" class="w3-bar-item w3-button" style="width:25%
!important">PHOTOS</a>
 <a href="#contact" class="w3-bar-item w3-button" style="width:25%
!important">CONTACT</a>
 </div>
</div>
<!-- Page Content -->
<div class="w3-padding-large" id="main">
 <!-- Header/Home -->
 <header class="w3-container w3-padding-32 w3-center w3-black"
id="home">
 <h1 class="w3-jumbo"><span class="w3-hide-small"></span>Tamil
Nadu Police</h1>
 <p>Truth alone triumphs</p>
 <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Tnpolice-logo.png" alt="boy" class="w3-image" width="992" height="1108">-
->
 </header>
 <style>
.btn {
 background-color: #f4511e;
 border: none;
 color: white;
 padding: 16px 32px;
 text-align: center;
 font-size: 16px;
 margin: 4px 2px;
 opacity: 0.6;
 transition: 0.3s;
}
.btn:hover {opacity: 1}
</style>
<?php if($ctr==1)
{
?>
<button><a href="judge.html">View and modify Details of
arrest</p></button><br>
<button><a href="judge2.html">View Details of FIR(read
only)</p></button>
<?php
}
if($ctr==0){
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="container vh-100">
<div class="row justify-content-center h-100">
<div class="card w-25 my-auto shadow">
<div class="card-header text-center bgprimary text-white">
<h2>Sorry Details for this id do not
exist</h2>
</div>
</div>
</div>
<?php
}
?>
</body>
</html>