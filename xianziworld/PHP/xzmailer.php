<?php
require_once("../PHPMailer-master/class.phpmailer.php");
require_once("../PHPMailer-master/class.smtp.php");
class QQMailer
{
	public static $HOST = 'smtp.qq.com';
	public static $PORT = 465;
	public static $SMTP = 'ssl';
	public static $CHARSET = 'UTF-8';
	private static $USERNAME = 'bliblixianzi@foxmail.com';
	private static $PASSWORD = 'lavrkwfbxnvbggbc';
	private static $NICKNAME = 'XianziWorld官方';
	public function __construct($debug = false){
		$this->mailer = new PHPMailer();
		$this->mailer->SMTPDebug = $debug ? 1 : 0;
		$this->mailer->isSMTP();
	}
	public function getMailer(){
		return $this->mailer;
	}
	private function loadConfig(){
		$this->mailer->SMTPAuth = true;
		 $this->mailer->Host = self::$HOST;
		 $this->mailer->Port = self::$PORT;
		 $this->mailer->SMTPSecure = self::$SMTP;
		 $this->mailer->Username = self::$USERNAME;
		 $this->mailer->Password = self::$PASSWORD;
		 $this->mailer->From = self::$USERNAME;
		 $this->mailer->FromName = self::$NICKNAME;
		 $this->mailer->isHTML(true);
		 $this->mailer->CharSet = self::$CHARSET;
	}
	public function addFile($path){
		$this->mailer->addAttachment($path);
	}
	public function send($email, $title, $content){
		$this->loadConfig();
		$this->mailer->addAddress($email);
		$this->mailer->Subject = $title;
		$this->mailer->Body = $content;
		return (bool)$this->mailer->send();
	}
}
?>