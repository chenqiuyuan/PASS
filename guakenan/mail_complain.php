<?php require("PHPMailer/class.phpmailer.php");

$mail = new PHPMailer(); //实例化
$mail->IsSMTP(); // 启用SMTP
$mail->Host = "smtp.qq.com"; //SMTP服务器 这里以新浪邮箱为例子
$mail->Port = 25;  //邮件发送端口
$mail->SMTPAuth   = true;  //启用SMTP认证
$mail->CharSet  = "UTF-8"; //字符集
$mail->Encoding = "base64"; //编码方式
$mail->Username = "380133194@qq.com";  //你的邮箱
$mail->Password = "Chenqiuyuan1";  //你的密码
$mail->Subject = "用户反馈"; //邮件标题
$mail->From = "380133194@qq.com";  //发件人地址（也就是你的邮箱）
$mail->FromName = "陈秋远";  //发件人姓名
$address = "380133194@qq.com";//收件人email
$mail->AddAddress("380133194@qq.com", "挂科难注册账户");//添加收件人地址，昵称

$mail->IsHTML(true); //支持html格式内容

$complain=$_POST['comment'];

$mail->Body = $complain; //邮件内容
//发送
if(!$mail->Send()) {
 echo "fail: " . $mail->ErrorInfo;
} else {
 echo "ok";
}
?>