<?php

	include('../db/connection.php');

	// include("../smtp/PHPMailerAutoload.php");

	if (isset($_POST['full_name']) && isset($_POST['phone_num']) && isset($_POST['email_addr']) && isset($_POST['msg'])) 
	{
		
		$full_name = mysqli_real_escape_string($con,  $_POST['full_name']);
		$phone_num = mysqli_real_escape_string($con,  $_POST['phone_num']);
		$email_addr = mysqli_real_escape_string($con,  $_POST['email_addr']);
		$msg = mysqli_real_escape_string($con,  $_POST['msg']);

		mysqli_query($con,  "insert into contact_us(full_name, phone_num, email_addr, msg) VALUES('$full_name', '$phone_num', '$email_addr', '$msg') ");

		// $success_msg = "Message Has Been Sent Successfully";

		// // $html = "<table>
		// // 			<tr>
		// // 				<td>Full Name : </td>
		// // 				<td>$full_name</td>						
		// // 			</tr>
		// // 			<tr>
		// // 				<td>Phone Number : </td>
		// // 				<td>$phone_num</td>						
		// // 			</tr>
		// // 			<tr>
		// // 				<td>Email Address : </td>
		// // 				<td>$email_addr</td>						
		// // 			</tr>
		// // 			<tr>
		// // 				<td>Message : </td>
		// // 				<td>$msg</td>						
		// // 			</tr>
		// // 		 </table>";

		// // $mail = new PHPMailer(true);
		// // $mail->isSMTP();
		// // $mail->Host="smtp.gmail.com";
		// // $mail->Port=587;
		// // $mail->SMTPSecure="tls";
		// // $mail->SMTPAuth=true;
		// // $mail->Username="gosavidinesh54@gmail.com";
		// // $mail->Password="dinesh215075";
		// // $mail->SetFrom("gosavidinesh54@gmail.com");
		// // $mail->addAddress("gosavidinesh54@gmail.com");
		// // $mail->IsHTML(true);
		// // $mail->Subject="New Contact Us Message";
		// // $mail->Body= $html;
		// // $mail->SMTPOptions=array('ssl'=>array(
		// // 	   'verify_peer'=>false, 
		// // 	   'verify_peer_name'=>false, 
		// // 	   'allow_self_signed'=>false
		// // ));

		// // if($mail->send())
		// // {
		// // 	//echo "Mail Sent";
		// // }
		// // else
		// // {
		// // 	//echo "Eror Occured while sending Email";
		// // }

		// echo $success_msg;

	}

?>