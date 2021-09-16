<?php 
$machineId = mysql_query("SELECT `machine_id` FROM `users` WHERE `username` = '".$_SESSION['user']['username']."'");
$getBan = mysql_query("SELECT * FROM `bans` WHERE `value` = '".$_SESSION['user']['username']."' OR `value` = '".$_SERVER['REMOTE_ADDR']."' OR `value` = '" . $machineId . "'");
if (mysql_num_rows($getBan) == 0) 
{
	if (empty($machineId) || mysql_num_rows("SELECT * FROM `bans` WHERE `value` = '" . $machineId . "'") == 0)
	{
		header("Location: /me?not_banned");
		exit;
	}
} 

$getInfo = mysql_fetch_assoc($getBan);
if(time() > $getInfo['expire'])
{
	mysql_query("DELETE FROM `bans` WHERE `value` = '".$_SESSION['user']['username']."' OR `value` = '".$_SERVER['REMOTE_ADDR']."'") or die(mysql_error());
	header("Location: /me?ban_expired");
	exit;
}
?>