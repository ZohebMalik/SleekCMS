<?php

if($_SESSION['user']['id']){


$getuserinfo = mysql_query("SELECT * FROM users WHERE id='".$_SESSION['user']['id']."'");
while($row = mysql_fetch_array($getuserinfo)){

$usernameban = $row['username'];

$ipban = $row['ip_last'];
$machine = $row['machine_id'];



}



$getuserinfo= mysql_query("SELECT * FROM bans WHERE value='{$usernameban}' AND expire > UNIX_TIMESTAMP() ORDER BY expire DESC LIMIT 1");

$getuserinfoip= mysql_query("SELECT * FROM bans WHERE value='{$ipban}' AND expire > UNIX_TIMESTAMP() ORDER BY expire DESC LIMIT 1");

$getusermachine= mysql_query("SELECT * FROM bans WHERE value='{$machine}' AND expire > UNIX_TIMESTAMP() ORDER BY expire DESC LIMIT 1");



while($row = mysql_fetch_array($getuserinfo)){


$expire = $row['expire'];



 if($expire <= time()){ 
  
 } 
 else{
header('Location: banned');
exit;
 }
 }
 
 while($row = mysql_fetch_array($getuserinfoip)){


$expire = $row['expire'];



 if($expire <= time()){ 
  
 } 
 else{
header('Location: banned');
exit;
 }
 }
 while($row = mysql_fetch_array($getusermachine)){


$expire = $row['expire'];



 if($expire <= time()){ 
  
 } 
 else{
header('Location: banned');
exit;
 }
 }
}

?>