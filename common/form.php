<section id="contact" class="blue-theme">
    <div class="container">
    	<div class="section-header">
			<h1>SIGUIENTE PASO... HABLEMOS!</h1>
    	</div>
    	

<?php
if (isset($_POST['submit'])){
	
	//condition
	$correct = true;
	
	//Get Info
	$Name = Trim(stripslashes($_POST['name'])); 
	$Phone = Trim(stripslashes($_POST['phone'])); 
	$Email = Trim(stripslashes($_POST['email'])); 
	$Message = Trim(stripslashes($_POST['message'])); 
	$Company = Trim(stripslashes($_POST['company'])); 
	
	//text fields 
	$string_exp = "/^[A-Za-z .'-]+$/";
	//email field
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
	//validate name field
	if($Name == ""){
	    $name_error="* Introduzca un nombre";
	    $correct = false;
	}
	else if (!preg_match($string_exp,$Name)) {
		$name_error = "* Nombre: formato no válido";
		$correct= false;
	}
	
	//validate company field
	if($Company == ""){
	    $Company = "";
	}
	else if (!preg_match($string_exp,$Company)) {
		$company_error= "* Empresa: formato de no válido";
		$correct= false;
	}
	
	//validate message field
	if($Message == ""){
	    $message_error="* Introduzca un mensaje";
	    $correct = false;
	}
	else if (!preg_match($string_exp,$Message)) {
		$message_error= "* Mensaje: formato no válido";
		$correct= false;
	}
	
	//check email
	if($Email == ""){
	    $email_error="* Introduzca un email";
	    $correct = false;
	}
	else if(!preg_match($email_exp,$Email)){
	    $email_error = "* Email: formato de no válido";
	    $correct = false;
	}
	
	//check number
	if($Phone == ""){
	    $Phone = "";
	}
	else if(!is_numeric($Phone)){
		$phone_error ='* Teléfono: sólo números 0-9.';
		$correct = false;  
	}
	
	//proceed if all fields validate
	if ($correct) {
		$email_to  = "buffalino666@hotmail.com";
		$subject ="Webmail";
		
		//set message 
		$email_message .= "Nom: ".($Name)."\n";
		$email_message .= "Empresa: ".($Company)."\n";
		$email_message .= "Email: ".($Email)."\n";
		$email_message .= "Telèfon: ".($Phone)."\n"; 
		$email_message .= "Missatge: ".($Message)."\n";
		
		// create email headers
		$headers = 'From: '.$Name."\r\n".
		'Reply-To: '.$Email."\r\n";
		
		@mail($email_to, $subject, $email_message, $headers);  
		
		$ok ="Mensaje enviado! Gracias por contactar con nosotros.";
		
		/*$Name = "";
		$Email = "";
		$Phone = "";
		$Company = "";
		$Phone = "";*/
		//exit();
	
	}//end if
}// end isset
?>
		<form role="form" method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label>Mensaje <span class="required">*</span></label>
						<textarea rows="4" type="text" class="form-control" name="message" id="" value="<?php echo $Message;?>"></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 form-inline nopadd">
					<div class="form-group display-table w100">
						<div class="item col-xs-6 col-md-4">
							<label>Nombre <span class="required">*</span></label>
							<input type="text" class="form-control" name="name" id="" value="<?php echo $Name;?>" 
							/>
						</div>
						
						<div class="item col-xs-6 col-md-4">
							<label>Email <span class="required">*</span></label>
							<input type="text" class="form-control" name="email" id="" value="<?php echo $Email;?>" />
						</div>
						
						<div class="item col-xs-6 col-md-4">
							<label>Empresa</label>
							<input type="text" class="form-control" name="company" id="" value="<?php echo $Company;?>" />
						</div>
						
						<div class="item col-xs-6 col-md-4">
							<label>Teléfono</label>
							<input type="text" class="form-control" name="phone" id="" value="<?php echo $Phone;?>" />
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 align">
					<input id="submit" name="submit" class="btn mybtn-darkBlue" type="submit" value="ENVIAR" />
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<span class="error"><?php echo $name_error;?></span>
					<span class="error"><?php echo $email_error;?></span>
					<span class="error"><?php echo $company_error;?></span>
					<span class="error"><?php echo $phone_error;?></span>
					<span class="error"><?php echo $message_error;?></span>
					<span class="error"><?php echo $ok;?></span>
				</div>
			</div>
		</form>
	</div>
</section>
