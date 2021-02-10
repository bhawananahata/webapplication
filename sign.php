<?php 
require_once "pdo.php";
session_start();

if( isset($_POST['save'])){
if ( isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['username'])
     && isset($_POST['pass'])){

    // Data validation
    if (strlen($_POST['name'])< 1){
	$_SESSION["error"]="Please insert your name";
	header("Location: sign.php?profile_id=" . $_POST["profile_id"]);
	return;
	}
	elseif ( strpos($_POST['email'], '@') === false )
    {
        $_SESSION["error"] = "Email must have an at-sign (@)";
		header("Location: sign.php?profile_id=" . $_POST["profile_id"]);
	   return;
    }
        else if (strlen($_POST['username'])< 1){
	$_SESSION["error"]="Please insert a username";
	header("Location: sign.php?profile_id=" . $_POST["profile_id"]);
	return;
	}
	else if (strlen($_POST['pass'])< 1){
	$_SESSION["error"]="Please set a password";
	header("Location: sign.php?profile_id=" . $_POST["profile_id"]);
	return;
	}
	
     else{ 
	 // Data is valid - time to insert
    $stmt = $pdo->prepare('INSERT INTO Profile
        (name, username, email, password) 
    VALUES (:nm, :un, :em, :ps)');
    $stmt->execute(array(
        ':nm' => $_POST['name'],
        ':un' => $_POST['username'],
        ':em' => $_POST['email'],
        ':ps' => $_POST['pass']));
		
	$_SESSION['email']=$_POST['email'];
	$_SESSION['pass']=$_POST['pass'];
	$_SESSION['name']=$_POST['name'];
    header("Location: index.php");
    return;
}}}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Awesome webiste</title>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <link rel="stylesheet" href="css/data.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="js/scripts.js"></script>
</head>
<body>
<div class="login">
<div class="inner-width">
<div class="box">
<h1>Sign up to LOOSE-END</h1>
<div class="yu">
<button class="log"><a href="http://accounts.google.com">Sign in with Google</a></button>
<button class="fab fa-twitter lig"><a href="http://twitter.com"></a></button>
</div>
</div>
<hr>
<div class="dabi">
<form method="post">
<p>Name</p>
<input type="text" name="name"  class="f"/>
<p>Username</p>
<input type="text" name="username"  class="f"/>
<p>Email</p>
<input type="text" name="email"  class="f"/>
<p>Password</p>
<input type="text" name="pass"  class="f"/>
<div class="eksath">
<input type="checkbox" class="ex"/><p>By checking this box,you are agreeing on the terms and conditions
of this website</p></div>
<input type="submit" name="save" class="faz"/>
</form>
<p align="center">Already a member?<a href="logup.php"> Sign in now</a></p>
</div>
</div>
</div>
</body>
</html>