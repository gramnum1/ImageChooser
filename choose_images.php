<?php
/* choose_images.php
** Takes post data and 
** sends out emails
**/


if(isset($_POST)) {
    //emailTo
    //1: manager sending selected images
    //2: Employee sending images to be reviewed
    $emailTo=$_POST['emailTo'];
    

    //If manager sending accepted images
    if($emailTo==1){
         $msg="<h1>Accepted Pictures</h1><ul>";
  
   /* For each image 
   ** print image number 
   ** and name
   */
   foreach($_POST as $key => $value)
    {
   
        if(strpos($key, "cimg")>-1){
           $i=str_replace('cimg_', '', $key);
            if($value==1){
                $msg.="<li>IMAGE: ".$_POST['image_'.$i]."</li>"; 
                
            }
        }

    }
   

$msg.="</ul>";
        
        $resp="Accepted Images Sent.";


    // If Employee is requesting review    
    }else{
        $msg="<h1>Review Requested</h1><a href='".$_POST['url']."'>".$_POST['url']."</a>";
        $resp="Request For Review Sent";
        
    }

 
    
      
       
        
        
    
  
    //This needs to be configured
	require_once('/php/class.phpmailer-lite.php');
	$mail = new PHPMailerLite(); // defaults to using php "Sendmail" (or Qmail, depending on availability)
	$mail->IsMail();	// Use PHP mail
	$mail->SetFrom("[FromAddress]");
	$mail->CharSet = 'UTF-8';
	$mail->AddAddress($_POST['email']);
	//$mail->AddCC($_POST['csewell']);
	$mail->Subject = "Marketing Image Chooser";
	$mail->MsgHTML($msg);

	if(!$mail->Send()) {
		//echo "Mailer Error: " . $mail->ErrorInfo;
		$msg = "<div id=\"submitted\"><h1>There was an error submitting the form, please click back and try again.</h1></div>";
	}
	else {
		$msg = "<div id=\"submitted\"><h1>{$resp}</h1></div>";
	}
echo $msg;
exit();
}
?>

