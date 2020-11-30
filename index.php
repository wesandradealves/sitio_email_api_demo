<?php
	print_r($_GET);
	/*$site = str_replace('/', '', explode($_SERVER['HTTP_ORIGIN'], $_POST['url'])[1]);

	require ( dirname(__FILE__).'/'.'../'.$site.'/wp-load.php' );

    require_once './src/Exception.php';
    require_once './src/PHPMailer.php';
    require_once './src/SMTP.php';

  if ( 'POST' == $_SERVER['REQUEST_METHOD'] && isset( $_POST['newsletter'] ) ) {

    $post_type = 'assinantes';
    $email = $_POST['email'];
    $pessoa = $_POST['pessoa'];
    $telefone = $_POST['telefone'];
    $nome = $_POST['nome'];
    $cep = $_POST['cep'];

    $new_post = array(
    
    'post_title'    => $nome,

    'post_status'   => 'publish',          

    'post_type'     => $post_type 

    );

    $pid = wp_insert_post($new_post);

    if($pid) {

      	add_post_meta($pid, 'email', $email, true);  
      	add_post_meta($pid, 'pessoa', $pessoa, true); 
     	add_post_meta($pid, 'telefone', $telefone, true); 
     	add_post_meta($pid, 'cep', $cep, true); 

	    $mail = new PHPMailer\PHPMailer\PHPMailer();

		$mensagem = $nome.'<br/>'.$email.'<br/>'.$telefone.'<br/>'.$pessoa.'<br/>'.$cep;

		$mail->CharSet = 'UTF-8';

		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->SMTPAutoTLS = true;
		$mail->Port = 465;

		$mail->Username = 'sdomoinho@gmail.com';
		$mail->Password = 'sitio1301M@';
		$mail->SMTPSecure = 'ssl';
		$mail->SMTPDebug = 2;

		$mail->From = 'sdomoinho@gmail.com';
		$mail->FromName = 'NoReply - Sitio do Moinho';

		$mail->AddReplyTo('sdomoinho@gmail.com');

		$mail->AddAddress('vendas@sitiodomoinho.com');
		$mail->addBCC('wesandradealves@gmail.com');

		$mail->IsHTML(true);

		$mail->Subject = 'Página '.$site.': Novo cadastro página '.$_POST['site'];
		$mail->Body    = $mensagem;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
		if($mail->Send()) {
			header("Location: " . $_POST['url'].'/obrigado');
		}
    }

  }*/