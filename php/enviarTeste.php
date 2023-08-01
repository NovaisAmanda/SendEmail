<?php

session_start();
$_SESSION['nome_produto'];      
$_SESSION['preco_produto'];   
$_SESSION['descricao_produto'] ;
$_SESSION['fabricacao_produto'];
$_SESSION['quantidade_produto'];
$_SESSION['email'];
$_SESSION['nome'];
//enviar e-mail PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
require 'lib/vendor/autoload.php';
require 'lib/vendor/phpmailer/src/Exception.php';
require 'lib/vendor/phpmailer/src/SMTP.php';
require 'lib/vendor/phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);

try{

    $mail->isSMTP();                               
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                            
    $mail->Username = 'teste@teste'; //email que está sendo mandado
    $mail->Password = 'teste';           
    $mail->SMTPSecure = 'tls';                           
    $mail->Port = 587;  
    
    $mail->setFrom('teste@teste', 'Teste');
    $mail->addAddress('teste@teste'); //email de recebimento
    $mail->addCC($_SESSION['email'], $_SESSION['nome']); //e-mail de quem está logado
    
    $mail->isHTML(true);                                  
    $mail->Subject = 'Retorno do produto testado: ' . $_SESSION['id_produto']; ;
    $mail->Body    = 'Olá!'.'<br>'.'<br>'. 'Estimo que esteja bem'.'<br>'.'<br>'. 'Venho por este e-mail informar o recebimento do produto enviado para teste'.'<br>'.'<br>'
    .'<b style="color: red;">Informações sobre o produto:</b><br>'. 
    '<table>'.
    '<thead style= " padding: 1%; background: #272727; color: #f6f6f6;">
        <tr>
            <th scope="col" style="padding: 20px;">Nome do Produto</th>
            <th scope="col" style="padding: 20px;">Preço do Produto</th>
            <th scope="col" style="padding: 20px;">Descrição do produto</th>
            <th scope="col" style="padding: 20px;">Data da Fabricação</th>
            <th scope="col" style="padding: 20px;">Quantidade de Produto</th>
        </tr>
    </thead>'.
    '<tbody>'.
        '<tr>'.
            '<td>'. $_SESSION['nome_produto'] . '</td>'.
            '<td>'. $_SESSION['preco_produto'] . '</td>'.
            '<td>'. $_SESSION['descricao_produto'] . '</td>'.
            '<td>'. $_SESSION['fabricacao_produto'] . '</td>'.
            '<td>'. $_SESSION['quantidade_produto'] . '</td>'.
        '</tr>'.
    '</tbody>'.
    '</table>'.
     '<br>.' .'<br>'. 'Atenciosamente,' . '<br>'. $_SESSION['nome'];

    $mail->send();

}
catch (Exception $e){
    echo "Erro \n Mailer Error: {$mail->ErrorInfo}";
}
?>
