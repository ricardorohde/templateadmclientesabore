<?php
/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *
 */			
 			$userName='Você solicitou a requisição de mudança de senha.';
			$userEmail= $email;
			$adminEmail = 'lelo245@hotmail.com';
			$userMsg='Sua nova senha é '.$senha. 'Faça o login com esta senha ! ';
			$subject = "Nova Senha Admin"; 
			$message = '<html><head><title>'.$subject.'</title></head><body><table><tr><td>Email :  </td><td> '.$userEmail.'</td></tr>
<tr><td>Aviso : </td><td> '.$userName.'</td></tr><tr><td>Says : </td><td> '.$userMsg.'</td>
</tr></table></body></html>';
			//$message = "Email id :  ".$userEmail. "\r\Mensagem : ".$userName."\r\nSays : ".$userMsg;
			$to=$email_id;
			$headers = "From: " . strip_tags($adminEmail) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($adminEmail) . "\r\n";
			//$headers .= "CC:". strip_tags($userEmail) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			if(!mail($to, $subject, $message, $headers)){
             $mail_status='no';
				header("Location: index.php");
			exit();
          }else{
          	  $mail_status='yes';
          	header("Location: index.php");
			exit();
           
         } ?>