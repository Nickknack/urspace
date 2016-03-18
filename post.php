<?php
//start session
session_start();
// if user not logged in, redirect to homepage
if(!isset($_SESSION['login_user']))
{
<<<<<<< HEAD
	header('Location: login.html');
	
=======
	header('Location: index.html');

>>>>>>> origin/master
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<head>

	<link rel="stylesheet" type="text/css" href="mystyle.css"></link>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> <!-- This is the link for bootstrap !-->
	<script type = "text/javascript"  src = "java1.js" ></script>
	<title>Wall Post</title>
</head>

<body class="allPages">
	<div class="container-fluid"> <!-- This is the container div for the page; it is flued so it spands the viewport !-->
		<div class="row"> <!-- Header row !-->
			<div class="col-xs-12">
				<div class="header">
					<h1>
						<a href="index.php" class="homeLink">
							<img src="blank.jpg" class="placeHolder" alt="img"></img> FakeBook
						</a>
					</h1>
				</div>
			</div>
		</div>

		<div class="row"> <!-- Content row!-->
			<div class="col-xs-3"> <!--Sidebar column !-->
				<div class="sideBar">
					<br></br>
					<a class="buttons" href="wall.php">View Posts</a>
					<p class="blankButton">New Post</p>
					<a class="buttons" href="search.php">Search</a>
					<a class="buttons" href="logout.php">Logout</a>
					<br></br>
					<img src="advertisment1.jpg" class="ad" alt="ad1"></img>
					<img src="advertisment2.jpg" class="ad" alt="ad2"></img>
					<img src="advertisment3.jpg" class="ad" alt="ad3"></img>
					<img src="advertisment4.jpg" class="ad" alt="ad4"></img>
					<img src="advertisment5.jpg" class="ad" alt="ad5"></img>

				</div>
			</div>

			<div class="col-xs-9"> <!-- Content column !-->
				<form action="posted.php" method="POST" enctype="multipart/form-data" id="postForm">
					<fieldset class="largeColorsec">
						<legend>New Anonymous Post</legend>

						Picture (optional): <input type="file" name="postPic"></input>
						<span class="errorMsg" id="errorUrl"></span><br></br>
						Post: <br></br><textarea name="post1" rows="7" cols="100"></textarea>
						<br></br><span class="errorMsg" id="errorComments"></span>

						   <p>
						  <input type="submit" value="Submit"/>
						  <input type="reset" value="Reset"/>
						  </p>
					</fieldset>
				</form>
			</div>
		</div>

		<div class="row"> <!-- footer row !-->
			<div class="col-xs-12">
				<div class="footer">
					<p class="p2">2015 Department of Computer Science CS 215</p>
				</div>
			</div>
		</div>
	</div>

	<script type = "text/javascript"  src = "post1.js" ></script>
</body>
</html>
