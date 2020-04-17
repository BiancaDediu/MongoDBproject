               
<?php
if(isset($_COOKIE['email'])and isset($_COOKIE['pass']))
{
$email=$_COOKIE['email'];
$pass=$_COOKIE['pass'];
echo"<script>
    document.getElementById('email').value='$email';
    document.getElementById('pass').value='$pass';
    </script>";
}
?>
<?php
            $number1=rand(1,9);
            $number2=rand(1,9);
            $sum=$number1+$number2;
        ?>


<!DOCTYPE html>
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
    
   
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button"><i class="fa fa-home"></i>HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#login" class="w3-bar-item w3-button w3-hide-small" ><i class="fa fa-unlock-alt"></i> LOGIN</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
   
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
    <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#login" class="w3-bar-item w3-button" onclick="toggleFunction()">LOGIN</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">

  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-xlarge w3-wide w3-animate-opacity">PhotoMania <span class="w3-hide-small"></span></span>
  </div>
</div>
<iframe src="//www.facebook.com/plugins/like.php?href=http://localhost/Photography/index.php&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;" allowTransparency="true"></iframe>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ME</h3>
  <p class="w3-center"><em>I love photography!</em></p>
  <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer.
   </p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <img src="images/me1.jpg" class="w3-round w3-image " alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
        <canvas id="myCanvas" width="500" height="100" style="border:1px solid #d3d3d3;"></canvas>
   <script>
 var c = document.getElementById("myCanvas");
 var ctx = c.getContext("2d");
 ctx.font = "30px Arial";
 ctx.fillText("Welcome to my website!I'm Bianca.",10,60);
</script>
      <p>Welcome to my website. I am Dediu Bianca from Romania. ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. My favorite melody :</p>
    
</div>
    <center>
    <audio controls>
        <source src="audio/dgb.mp3" type="audio/mpeg">
    </audio>
        </center>
  </div>
  <p class="w3-large w3-center w3-padding-16">I'm really good at:</p>
  <p class="w3-wide"><i class="fa fa-camera"></i>Photography</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Web Design</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Photoshop</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
  </div>
</div>

<!--LOGIN-->


<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">LOGIN</span>
  </div>
</div>
<div class="w3-content w3-container w3-padding-64" id="login">
<h3 class="w3-center">Welcome to PhotoMania</h3>
  <p class="w3-center"><em>Please, login!</em></p>
  
  <table cellapadding="5" cellaspacing="10" align="center">
     <form  method="post" action="validate.php">
         <tr><th>Email</th><td><input type="text" id="email" name="email"></td></tr>
         <tr><th>Password</th><td><input type="password" id="pass" name="password"></td></tr>
         <tr>
            <td align="right"><input type="hidden" name="correctsum" value="<?php echo $sum;?>"><?php echo $number1.'+'.$number2.'=';?></td>
            <td><input type="text" name="captcha"></td>

        </tr>
         <tr><td colspan="2" align="center" ><input type="checkbox" name="remember" value="1">Remeber me</td></tr>
              <tr><td colspan="2" align="right" ><input type="submit" name="login" value="Login"></td></tr>
     </form>
 </table> 
  </div>
 

<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle"> 
    <span class="w3-xxlarge w3-text-whitew3-wide">PORTFOLIO</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">MY WORK</h3>
 

<?php
        require_once 'connection2.php';
      $query = new MongoDB\Driver\Query([]); 
        $rows = $client->executeQuery("images.images", $query);
        ?>
       <table>
        <tr>
        <b><td>Name</td></b>
        <b><td>Image</td></b>
        <b><td colspan="3">Actions</td></b>
        </tr>
<?php foreach($rows as $val):?> 
<?php if((isset($val->nume))&&(isset($val->image))&&
($val->nume!="")):?>   
<tr>
    <td><?php echo $val->nume;?></td>
    <td><img src="<?php echo $val->image;?>" width="300" height="300"></td>
    <td><?php echo "<a href=\"view.php?id=".$val->_id."\">View</a>";?></td> 
 </tr>
    <?php endif;?>
    <?php endforeach;?>
</table>


<!--Clip Video-->

<div class="iframe-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/LOwgl7Q38Cc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<video width="950" height="700"   allowfullscreen controls>
  <source src="audio/pascal.mp4" type="video/mp4">
</video>

</div>


<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
    <center>   
    <svg  heigh="100" width="100" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;" xml:space="preserve">
<g>
	<path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
		s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
	<path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
		L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
		C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
		C45.576,13.08,46.321,24.468,41.099,31.431z"/>
</g>
</svg>
</center>
  <h3 class="w3-center">WHERE I WORK</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>
  
  
       <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m6 w3-container">
<p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10848.709999737348!2d27.5721063!3d47.1739612!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x95f1e37c73c23e74!2sUniversitatea+Alexandru+Ioan+Cuza+din+Ia%C8%99i!5e0!3m2!1sro!2sro!4v1558708876408!5m2!1sro!2sro" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></p>
</div>
    <div class="w3-col m6 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <strong>Location:</strong>Iasi,Romania<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <strong>Phone:</strong> 0740664246<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <strong>Email:</strong> bianca.dediu21@yahoo.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <div class="g-recaptcha" data-theme="dark" data-sitekey="6Ldke6UUAAAAAPVjixu0k0ufiEhhN7lIzOlWGllZ"></div>
        <button class="w3-button w3-black w3-right w3-section"   href="captcha.php" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
      <div class="status">
         
      </div>
    </div>
  </div>
</div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="http://www.facebook.com" class="fa fa-facebook-official w3-hover-opacity"></a>
    <a href="https://www.instagram.com/" class="fa fa-instagram w3-hover-opacity"></a>
    <a  href="http://googleplus.com/" class="fa fa-google w3-hover-opacity"></a>
    <a  href="http://www.twitter.com/" class="fa fa-twitter w3-hover-opacity"></a>

  </div>
  
</footer>
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction();};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") === -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function IsValid(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      if (string1 == string2){
                        return true;
                      }
                      else{        
                        return false;
                      }
                  }
                 function CaptchaGenerator(){
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var res = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
                    document.getElementById("mainCaptcha").value = res
                  }

                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }
</script>
</body>
</html>

