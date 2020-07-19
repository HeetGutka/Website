<?php include ( "inc/connect.inc.php" ); ?>
<?php 
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
}
else {
	$user = $_SESSION['user_login'];
	$result = mysqli_query($con, "SELECT * FROM user WHERE id='$user'");
		$get_user_email = mysqli_fetch_assoc($result);
			$uname_db = $get_user_email['firstName'];
}
?>
<!doctype html>
<html>
	<head>
		<title>Nearby Shops</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="home-welcome-text" style="background-image: url(image/homebackgrndimg1.png);">
		<div class="homepageheader">
			<div class="signinButton loginButton">
				<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="logout.php">LOG OUT</a>';
						}
						else {
							echo '<a style="color: #fff; text-decoration: none;" href="signin.php">SIGN IN</a>';
						}
					 ?>
					
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="profile.php?uid='.$user.'">Hi '.$uname_db.'</a>';
						}
						else {
							echo '<a style="text-decoration: none; color: #fff;" href="login.php">LOG IN</a>';
						}
					 ?>
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
					<?php 
						if ($user!="") {
							echo '<a href="shops.php" style="text-decoration: none; color: #fff;">NEAR-BY GROCERY SHOPS</a>';
						}
						else {
								echo '<a href="shops.php" style="text-decoration: none; color: #fff;">NEAR-BY GROCERY SHOPS</a>';
						}
					 ?>
				</div>
			</div>
			<div style="float: left; margin: 5px 0px 0px 23px;">
				<a href="index.php">
					<img style=" height: 75px; width: 130px;" src="image/ebuybdlogo.png">
				</a>
			</div>
			<div class="">
				<div id="srcheader">
					<form id="newsearch" method="get" action="search.php">
					        <input type="text" class="srctextinput" name="keywords" size="21" maxlength="120"  placeholder="Search Here..."><input type="submit" value="search" class="srcbutton" >
					</form>
				<div class="srcclear"></div>
				</div>
			</div>
		</div>
		<div class="holecontainer" style="padding-top: 110px; text-align:center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 pr-md-5">
        	          	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.7696657779366!2d72.9465744149069!3d19.205260152887366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b90ae0ee369f%3A0xf581c5566540e94b!2sSaikripa%20Vegetable%20Supplier!5e0!3m2!1sen!2sin!4v1587658827255!5m2!1sen!2sin" width="1300" height="450" frameborder="0" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0" style="zoom:20%">
        	          	</iframe>
        	          </div>
        	          <br><br>
        	          <div class="col-md-4 pr-md-5">
        	          	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25057.578263461408!2d72.95837790157141!3d19.190298872214388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b8f09d4fb17d%3A0xe5e04f26b7299dc2!2sKushwaha%20Vegetables!5e0!3m2!1sen!2sin!4v1587674627930!5m2!1sen!2sin" width="1300" height="450" frameborder="0" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        	          </div>
        	          <br><br>
        	          <div class="col-md-4 pr-md-5">
        	          	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44478.20781802891!2d72.94331941662887!3d19.18189894833921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b8fa784a9259%3A0x9f30a4ecd173afcb!2sMahalaxmi%20fruit%20centre!5e0!3m2!1sen!2sin!4v1587674847055!5m2!1sen!2sin" width="1300" height="450" frameborder="0" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        	          </div>
        	          <br><br>
        	          <div class="col-md-4 pr-md-5">
        	          	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5777.964348568409!2d72.94240530430142!3d19.184320309179913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b9ab2b4d3fa1%3A0x90dd39963a031246!2sOm%20Prakash%20Fruit%20Centre!5e0!3m2!1sen!2sin!4v1587674713468!5m2!1sen!2sin" width="1300" height="450" frameborder="0" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        	          </div>
        	          <br><br>
				</div>
			</div>
		</div>
	</body>
</html>
