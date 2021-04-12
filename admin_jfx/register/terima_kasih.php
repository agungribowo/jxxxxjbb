<?php
require('../config/server2.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		 <link rel="stylesheet" href="../plugins/choosen/chosen.css">
<style type="text/css">
	.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 100%;
}

select {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;



}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from {  opacity:0 } 
  to {  opacity:1 }
}

@keyframes animatebottom { 
  from{  opacity:0 } 
  to{ opacity:1 }
}

#myDiv {
  display: none;
/*  text-align: center;*/
}

</style>
	</head>


<body class="hold-transition skin-blue sidebar-mini" onload="myFunction()" style="margin:0;">
<div id="loader"></div>

<div style="display:block;" id="myDiv" class="animate-bottom">

  <div class="body-inner">

		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				  <form method="POST" action="aksi_page.php">

					<h3>Terima kasih telah mendaftar </h3>
					
						<center><span>Akun anda sedang proses mohon tunggu aktifasi</span></center>
					
					<!-- <div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" name="nip" class="form-control" placeholder="NIP">
					</div> -->
					
					<br><br><br>
					<a href="../" class="button"><span>KEMBALI</span></a>
					
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		  <script src="../plugins/choosen/chosen.jquery.js" type="text/javascript"></script>
  <script src="../plugins/choosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script src="../plugins/choosen/docsupport/init.js" type="text/javascript" charset="utf-8"></script>
	 </div><!-- Body inner end -->

</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>