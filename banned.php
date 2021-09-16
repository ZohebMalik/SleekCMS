<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">		

	<head>
		
		<?php include("/app/tpl/skins/Sleek/includes/banned.php"); ?>
		
		<?php
if(isset($_SESSION['user']['id']))
{
	session_destroy();
}

?>
		
		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/inner_style.css?<?php echo time(); ?>"/>
		
		<script type="text/javascript" src="/app/tpl/skins/{skin}/js/jquery.js?<?php echo time(); ?>"></script>
		
		<script type="text/javascript" src="/app/tpl/skins/{skin}/js/redirect.js?<?php echo time(); ?>"></script>
		
	</head>




<div id="widthcontain" style="width: 910px;margin: 0 auto;overflow: auto;">







<div id="leftbit" style="float: left;width: 0px;">







<div id="left_content_top">



<font color="#f26760">You have been banned</font>



</div>



<div id="left_content_mid">

						<p>Looks like you have been banned! The details of your ban is as follows:</p>
						<p><b>You were banned by:</b> <?php echo $getInfo['added_by']; ?>.</p>
						<p><b>The reasoning for your ban:</b> <?php echo $getInfo['reason']; ?>.</p>
						<p><b>The type of ban you received:</b> <?php echo $getInfo['bantype']; ?> ban.</p>
						<p><b>Approximately when your ban will expire:</b> <?php echo date("D, d F Y H:i (P)", $getInfo['expire']); ?>.</p>
</div>


<div id="left_content_bot"></div>

</div>



<div id="rightbit" style="float: right;width: 332px;">



<div id="right_content_top">

Attention

</div>

<div style="font-size:12px;" id="right_content_mid"><div style="margin-bottom:11px;"></br><center><img src="/app/tpl/skins/{skin}/images/PNG/frank_logout.png?<?php echo time(); ?>"></center></div><center>


You will be redirected to the index page in <b id="banned">20</b> seconds.			
			
</div>

<div id="right_content_bot">


</div>


</body>