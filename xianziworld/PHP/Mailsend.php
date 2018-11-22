<?php
	require_once 'xzmailer.php';
	$mailer =new QQMailer(true);
	$mailer->addFile('../img/cursor/1.jpg');
	$title='服务器测试!';
	$content = '<h1>Welcome to Xianziworld!</h1>';
	$mailer->send('bliblixianzi@foxmail.com',$title,$content)
?>