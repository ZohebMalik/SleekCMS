<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">		

	<head>

		<title>{hotelname} - Register</title>
		
		<?php include('/app/tpl/skins/Sleek/favicon/favicon.html'); ?>

		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/style.css?<?php echo time(); ?>"/>
		
		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/register.css?<?php echo time(); ?>"/>
		
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



<div id="navigation">

<div style="margin: 13px 0 0 0;">

Hey, make sure you choose a secure password when registering at {hotelname}!

</div>



</div>






<div id="widthcontain" style="width: 910px;margin: 0 auto;overflow: auto;">



<div id="leftbit" style="float: left;width: 0px;">









<div id="left_content_top">

Register an account!

</div>

<div id="left_content_mid">

<?php if(isset($template->form->error)) { echo '<p style="color: rgba(231, 76, 60, 1.0);" align="center">'.$template->form->error.'</p>'; } ?>

<form action="register" method="post" id="registerForm">



<input type="text" autocomplete="on" name="reg_username" value="" class="login-field" placeholder="Username"><br />



<input type="text" autocomplete="on" name="reg_email" value="" placeholder="Email Address" class="login-field"><br />



<input type="password" autocomplete="off" name="reg_password" placeholder="Password" class="login-field"><br />



<input type="password" autocomplete="off" name="reg_rep_password" placeholder="Confirm Password" class="login-field"><br />





<input type="hidden" name="register" value="register" />



<hr>



<input id="login" type="submit" name="register" onClick="checkForm(); return false;" value="Register" />



</form>





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

