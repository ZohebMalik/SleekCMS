<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">		

	<head>

		<title>{hotelname} - Index</title>
		
		<?php include('/app/tpl/skins/Sleek/favicon/favicon.html'); ?>

		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/style.css?<?php echo time(); ?>"/>

		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/login.css?<?php echo time(); ?>"/>
		
		<script type="text/javascript" src="/app/tpl/skins/{skin}/js/jquery.js?<?php echo time(); ?>"></script>

	</head>



<body>

<div id="banner">

<div id="logo" class="logo">

</div>

</div>


<div id="container_top">

</div>

<div id="container_mid">

<?php if(isset($template->form->error)) { echo '<p style="color: rgba(231, 76, 60, 1.0);" align="center">'.$template->form->error.'</p>'; } ?>

<div id="navigation">



<div style="margin: 5px 0 0 0;">



<form id="loginformitem" name="loginformitem" method="post">



<input tabindex="2" type="text" class="login-field" name="log_username" id="credentials-email" placeholder="Username">



<input tabindex="3" class="login-field" type="password" name="log_password" type="password" id="credentials-password" placeholder="Password">



<input id="login" type="submit" value="LOG IN" name="login">



</form>



</div>



<div style="float: right;margin: -22px 32px 0 0;">

{online} Online!

</div>



</div>

<div class="error"><b>{hotelname} Notice</b> - If you face any issues logging in, then please report it to us via our <a href="https://discord.gg/x4H2AhV" target="_blank">official Discord.</a></div>




<div id="widthcontain" style="width: 910px;margin: 0 auto;overflow: auto;">



<div class="c-staff" style="height: 250px;width: 860px;background: url('app/tpl/skins/{skin}/images/GIF/bang.gif?<?php echo time(); ?>');border-bottom: 2px solid #b3b3b3;border-top: 2px solid #b3b3b3;border-radius: 5px 5px 5px 5px;margin: 0 auto 0 auto;">          



<a href="/register" style="text-decoration: none;color:#fff;">

<div id="enter_button" style="margin: 0 34px 0 0;top: 176px;position: relative;float: right;">



Register Account



</div>

</a>



</div>



<div id="leftbit" style="float: left;width: 0px;">









<div id="left_content_top">

What is {hotelname}?

</div>

<div id="left_content_mid">

<img src="app/tpl/skins/{skin}/images/PNG/seat.png?<?php echo time(); ?>" style="float:left;margin:7px 15px 10.5px 10px"/>

{hotelname} is a free virtual world where you can chat, walk, and meet new friends. It is also possible to create your own virtual room you can then decorate to your own aquired taste- you could also relate to a lot of our users as we as a community are very welcoming. So what are you waiting for? Please register or log-in to check out our awesome features such as our fantastic range of custom clothing and our fantastic range of events hosted on a regular, hourly basis. Do not hesitate to come online as we look forward to see you!

</div>

<div id="left_content_bot">

</div>



</div>



<div id="rightbit" style="float: right;width: 332px;">



<div id="right_content_top">

{hotelname} Safety!

</div>

<div id="right_content_mid">

<img src="app/tpl/skins/{skin}/images/PNG/frank_pw.png?<?php echo time(); ?>" style="float:right;margin:3.5px"/>







Always remember to pick a unique password and keep it safe! Don't tell anyone your password as you wouldn't want your account to be breached, please alert any member of staff if you wish to have your password modified.





</div>

<div id="right_content_bot">

</div>



</div>



</div>




</div>



</div>

<div id="container_bot">

</div>

<center><div style="margin-top:150px"/>

<div style="color: #fff;padding: 10px 0 0 0;height: 38px;width: 914px; margin: 18px auto 18px auto;border: solid 1px #FFFFFF;background-color: #333333;">

<div style="margin: 1px 0 0 16px;">



<?php include('/app/tpl/skins/Sleek/includes/footer.php'); ?>



</div>

</div>

</body>

