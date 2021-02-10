<?php 

require_once "pdo.php";
session_start();
if ( isset($_POST['emaila']) && isset($_POST['passa'])  ) {
    $sql = "SELECT email, password FROM profile 
        WHERE email = :em AND password =:pw";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':em' => $_POST['emaila'], 
        ':pw' => $_POST['passa']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

   var_dump($row);
   if ( $row === FALSE ) {
       $_SESSION['error']="Login incorrect.";
	   header("Location:sign.php");
       return;
   }
   else { 
	  $_SESSION['emaila']= $_POST['emaila'];
	  $_SESSION['passa']= $_POST['passa'];
	  $_SESSION['sign-in']= $_POST['sign-in'];
	  header("Location: index.php");
      return;
   }
}
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
<h1>Sign in to LOOSE-END</h1>
<?php 
// Flash pattern
if ( isset($_SESSION['msg']) ) {
    echo '<p style="color:red,font-size:24px,align:center" >'.$_SESSION['msg']."</p>\n";
    unset($_SESSION['msg']);
}
?>
<div class="yu">
<button class="log"><a href="http://accounts.google.com">Sign in with Google</a></button>
<button class="fab fa-twitter lig"><a href="http://twitter.com"></a></button>
</div>
</div>
<hr>
<div class="box2">
<form method="post"> 
<p>Username or Email Address</p>
<input type="text" name="emaila"  class="E"/>
<div class="ali">
<p>Password</p>
<a href="#" class="side">Forgot password?</a></div>
<input type="text" name="passa"  class="E"/>
<p></p>
<input type="submit" name="sign-in" class="E"/>
</form>
<p align="center">Not a member?<a href="sign.php"> Sign up now</a></p>
</div>
</div>
</div>

</body>
</html>