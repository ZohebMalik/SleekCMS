<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
if(isset($_SESSION['user']['id']))
{
	session_destroy();
}

?>

<html xmlns="https://www.w3.org/1999/xhtml">		

	<head>
		
		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/inner_style.css?<?php echo time(); ?>"/>
		
		<script type="text/javascript" src="/app/tpl/skins/{skin}/js/jquery.js?<?php echo time(); ?>"></script>

		<script type="text/javascript" src="/app/tpl/skins/{skin}/js/redirect.js?<?php echo time(); ?>"></script>
		
	</head>




<div id="widthcontain" style="width: 910px;margin: 0 auto;overflow: auto;">







<div id="leftbit" style="float: left;width: 0px;">







<div id="left_content_top">



You have successfully logged out



</div>



<div id="left_content_mid">

						<p>Seems like you have logged out.. We're sorry to see you leave! Be sure to check back in whenever you like, we hope to see you again soon! Be sure to bring around friends, partners and family too! We thank you for staying at {hotelname} Hotel.</p>

</div>


<div id="left_content_bot"></div>

</div>



<div id="rightbit" style="float: right;width: 332px;">



<div id="right_content_top">

Attention

</div>

<div style="font-size:12px;" id="right_content_mid"><div style="margin-bottom:10px;"></br><center><img src="/app/tpl/skins/{skin}/images/PNG/frank_logout.png?<?php echo time(); ?>"></center></div><center>


You will be redirected to the index page in <b id="logout">10</b> seconds.			
			
</div>

<div id="right_content_bot">


</div>


</body>