<?php
error_reporting(0);
include("link.php");
extract($_POST);
$emlll=$_POST['emll'];
if(!empty($emlll))
{
       $sel=mysqli_query($link,"select email from Registrationdetails where email='$emlll'");
       $arr=mysqli_fetch_assoc($sel);
       if($emlll==$arr['email'])
       {
          $arr=array_merge(range(0,9),range(0,9));
           for($i=1;$i<=6;$i++)
            {
          	$ch=$arr[array_rand($arr)];
        	$captcha=$captcha.$ch;
	        $fc=$fc.$ch.",";
            }
           $nar=explode(",",$fc);
           $to=$emlll;
           $subject="OTP for Reset password";
           $header="From: Admin<noreply>";
           $message="Your OTP is : "."$captcha"."."."This OTP is valid only for 180s.";
          if(mail($to,$subject,$message,$header))
           {
        	echo "$catcha";             
           }
           else
           {
        	echo "Please try again."; 
           }
       }
       else
       {
              echo "You're not registered member. Please register first.";
       }
}
?>