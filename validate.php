<html>
 <head>
<title>Photography</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 </head>

<body>
  
    <div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle"> 
    <span class="w3-xxlarge w3-text-whitew3-wide">PORTFOLIO</span>
  </div>
</div>
<?php 
$myemail="bianca.dediu21@yahoo.com";
$mypass="12345"; 
$captcha=$_POST['captcha'];
$correctsum=$_POST['correctsum'];

if( isset($_POST['login']))
{
 $email=$_POST['email'];
 $pass=$_POST['password'];
 
 if($email==$myemail and $pass==$mypass &&($_POST['captcha']==$_POST['correctsum']) ){
      if(!isset($_POST['captcha'])){
            $message.='enter captcha...</br>';
             }
     if( isset($_POST['remember'])){
      setcookie('email',$email ,time()+60*60*7);
      setcookie('pass',$pass ,time()+60*60*7);
 }
 session_start();
 $_SESSION['email']=$email;
 header("location:welcome.php");
     }
     else {
         echo "Email or Password or sum is Invalid<br> click here to <a href='index.php#login'> try again </a>";
 }
}
else
{
    header("location:index.php#login");
} ?>
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#portfolio" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="http://www.facebook.com" class="fa fa-facebook-official w3-hover-opacity"></a>
    <a href="https://www.instagram.com/" class="fa fa-instagram w3-hover-opacity"></a>
    <a  href="http://googleplus.com/" class="fa fa-google w3-hover-opacity"></a>
    <a  href="http://www.twitter.com/" class="fa fa-twitter w3-hover-opacity"></a>

  </div>
  
</footer>
</body>
 </html>