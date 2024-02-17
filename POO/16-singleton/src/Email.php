<?php
/**
 * Feito Por Jhonata;
 * Aplicação de Classe Singleton
 */
require 'vendor/autoload.php';

class Email {
    private static $instance = null;
    private $mailer;

    // construtor privado impede instancia fora da classe
    private function __construct(){
        $this->mailer = new PHPMailer\PHPMailer\PHPMailer();
        $this->mailer->isSMTP();
        $this->mailer->Host = 'smtp.example.com';
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = 'jhonata@jhonata.dev.com';
        $this->mailer->Password = 'roos';
    }

    //Metodo para acessar o Singleton
    public static function getInstance(){
        if (self::$instance === null) {
            self::$instance = new Email(); //utiliza o construtor que está privado
        }
        return self::$instance;
    }
    
    public function enviarEmail($to, $subject, $body){
        $this->mailer->setFrom('fron@example.com', 'Sender name');
        $this->mailer->addAddress($to);
        $this->mailer->Subject = $subject;
        $this->mailer->Body = $body;

        if(!$this->mailer->send()) {
            echo 'Erro ao enviar Email ' . $this->mailer->ErrorInfo;  // Corrigido de ErrosInfo para ErrorInfo
        } else {
            echo 'Email enviado';
        }
    }
}

$enviar = Email::getInstance();
$enviar->enviarEmail('receiver@example.com', 'Test Subject', 'Hello, this is a test email!');

$enviar2 = Email::getInstance();  // Corrigido de $sender2 para $enviar2
$enviar2->enviarEmail('receiver2@example.com', 'Test Subject', 'Hello, this is a test email!');

Email::getInstance()->enviarEmail('receiver@example.com', 'Test Subject', 'Hello, this is a test email!');
Email::getInstance()->enviarEmail('receiver2@example.com', 'Test Subject', 'Hello, this is a test email!');
?>
