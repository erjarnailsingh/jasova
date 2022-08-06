<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['phone'];
		$phone=$_POST['email'];
		$msg=$_POST['msg'];

		$to='erjarnailsingh@hotmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			// echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			echo "<script type= 'text/javascript'>alert('Thanks for Contacting Us. We Will Call You Shortly');
window.history.go(-1)
 </script>";
		}
		
		else{
			echo "Something went wrong!";
		}
	}
?>