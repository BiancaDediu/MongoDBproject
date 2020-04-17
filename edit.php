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
<div id="content">
<?php
       //include connection file
        require_once 'connection2.php';
        
        $bulk = new MongoDB\Driver\BulkWrite;
        
        if(!isset($_POST["submit"])){
$id = new \MongoDB\BSON\ObjectId($_GET['id']);
$filter = ['_id' => $id];
$query = new MongoDB\Driver\Query($filter);          
$article = $client->executeQuery('images.images', $query);
$doc = current($article->toArray());
        }else
            { 
           if($_FILES["image"]['name']>0){
           $target="./images/".md5(uniqid(time())).basename($_FILES['image']['name']);
           }else{
               $ids = new \MongoDB\BSON\ObjectId($_POST['id']);
$filters = ['_id' => $ids];
$querys = new MongoDB\Driver\Query($filters);          
$articles = $client->executeQuery('images.images', $querys);
$docs = current($articles->toArray());
           $target=$docs->image;
           echo $target;
           } 
            
 $data=[
    
    'nume'=>$_POST['nume'],
    'image'=>$target
    ];
 
 $id = new \MongoDB\BSON\ObjectId($_POST['id']);
$filter = ['_id' => $id];
    
$update=['$set'=>$data];
 $bulk->update($filter, $update);
  $client->executeBulkWrite('images.images',$bulk);
header('location:welcome.php');
            }
  ?>
<h1>Edit:</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
    <table align="center">
   <tr><td> Nume:</td><td><input type="text" name="nume" value="<?php echo $doc->nume ;?>"/></td></tr>
   <tr><td>  Imagine: </td><td><input type="file" name="image" id="image" value="<?php echo $doc->image ;?>" height='400' width='500'></td></tr>
   <img src="<?php echo  $doc->image;?>" height='400' width='500'><br/>
   
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
     <tr calspan="2"><td><input type="submit" name="submit" value="Edit"/></td></tr>
    </table>
    </form>
</div>
    
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