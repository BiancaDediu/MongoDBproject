 <?php
          if(isset($_POST['submit'])){
              $User_name=$_POST['Name'];
              $User_email=$_POST['Email'];
              $User_message=$_POST['Message'];
                  
              $email_from='';
              $email_subject="New Form Submission";
              $email_body="Name: $User_name.\n";
                          "Email Id: $User_email.\n";
                          "User Message: $User_message.\n";
                          
               $to_email="bianca.dediu21@yahoo.com";
               $headers="From:$email_from\r\n";
               $headers.="Replay-To:$user_email\r\n";
               
               $secretKey="6Ldke6UUAAAAANf-lNCTWHV7Remj8_easxVo4_Zp";
               $responseKey=$_POST['g-recaptcha-response'];
               $UserIP=$_SERVER['REMOTE_ADDR'];
               $url=" https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";
               $response= file_get_contents($url);
               $response=json_decode($response);
               
               if($response->succes){
                   mail($t_email,$email_subject,$email_body,$headers);
               echo"Message sent Successfullt.";}
               else{
                   echo"<span>Invalid Captcha ,Please Try Again</span>";
               }
               }
          ?>
