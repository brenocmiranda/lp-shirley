<?php 

header( 'Content-Type: application/json' );
require_once './assets/libs/PHPMailer-5.2-stable/PHPMailerAutoload.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$subject = 'Nova solicitação de visita :)';
$body = 'Informações de contato: <br><br>
        <strong>Nome: </strong>' . $nome . '<br>
        <strong>Telefone: </strong>' . $telefone . '<br>
        <strong>Endereço: </strong>' . $endereco . '<br><br>
        Mensagem recebida às ' . date('d/m/Y H:i:s') . ' através de '. $_SERVER['HTTP_HOST'] . '.';
$emails = 'brenno_cmm@hotmail.com';
//$emails = 'contato@shirleydaoncologia.com.br';
$mail = new PHPMailer;

try {
    /* PHP Mailer 

    // Server settings
    $mail->isSMTP();  
    $mail->Host         = 'smtp.gmail.com';
    $mail->SMTPAuth     = true;
    $mail->Username     = 'breno.miranda@komuh.com';
    $mail->Password     = 'Bb110996'; 
    $mail->SMTPSecure   = 'tls';
    $mail->Port         = 587; 
    $mail->CharSet = "UTF-8";
    $mail->setFrom('breno.miranda@komuh.com', 'Shirley da Oncologia');
    
    // Recipients
    $mail->addAddress('brenno_cmm@hotmail.com', 'Breno de Carvalho');

    // Content
    $mail->isHTML(true); 
    $mail->Subject = $subject;
    $mail->Body    = $body;

    $mail->send();
    */

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=UTF-8';

    $send = mail(
        $emails,
        $subject,
        $body,
        implode("\r\n", $headers)
    );

    die( json_encode( [
        'success' => true,
        'mensagem' => $mail,
    ] ) );  

} catch (Exception $e) {

    die( json_encode( [
        'success' => false,
        'mensagem' => 'Erro ao enviar mensagem: ' . $mail->ErrorInfo . '.',
    ] ) );  

}

?>