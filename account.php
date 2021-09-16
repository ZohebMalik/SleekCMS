<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">		

	<head>

		<title>{hotelname} - Account Settings</title>
		
		<?php include('/app/tpl/skins/Sleek/favicon/favicon.html'); ?>
		
		<?php include('/app/tpl/skins/Sleek/includes/newsID.php'); ?>

		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/inner_style.css?<?php echo time(); ?>"/>
		
		<script type="text/javascript" src="/app/tpl/skins/{skin}/js/jquery.js?<?php echo time(); ?>"></script>

	</head>


<?php include('/app/tpl/skins/Sleek/includes/main_body.php'); ?>


<div id="widthcontain" style="width: 910px;margin: 0 auto;overflow: auto;">







<div id="leftbit" style="float: left;width: 0px;">







<div id="left_content_top">



Account Settings



</div>



<div id="left_content_mid">
<?php if(isset($template->form->error)) { echo '<p style="color: rgba(231, 76, 60, 1.0);" align="center">'.$template->form->error.'</p>'; } ?>
<?php
				            if(isset($_POST['account']))
				            {
					        $acc_fr = mysql_real_escape_string($_POST['acc_fr']);
                            mysql_query("UPDATE users SET block_newfriends = '".$acc_fr."' WHERE id = '" . $_SESSION['user']['id'] . "'")or die(mysql_error());
					        }
			                ?>
							<?php
										
							$profileData = mysql_query("SELECT id,block_newfriends FROM users WHERE id = '".$_SESSION['user']['id']."' LIMIT 1");
							if(mysql_num_rows($profileData) > 0)
							{
							$profileUser = mysql_fetch_array($profileData);
							}
							?>
<form method="post" id="profileForm">

											<u><b>E-mail Address</b></u>
                                            <p>Your e-mail address is what you will need to reset your password incase you forget it.</p>
                                            <p><label><input type="text" name="acc_email" size="32" value="{email}" id="avatarmotto"></p>
											<div style="border-top: 1px dotted; padding-top: 8px; "></div>
                                            <u><b>Current Password</b></u>
                                            <p>Your current password is the password you use now.</p>
                                            <p><label><input type="password" name="acc_old_password" value="" id="avatarmotto"></p>
                                            <u><b>New Password</b></u>
                                            <p>Please only change this field if you wish to change your login password.</p>
                                            <p><label><input type="password" name="acc_new_password" value="" id="avatarmotto"></p>
											<div style="border-top: 1px dotted; padding-top: 8px; "></div>
                                            <u><b>Motto</b></u>
                                            <p>Your motto is what other {hotelName}'s will see on your {hotelName} home page and when clicking your avatar in the hotel.</p>
                                            <p><label><input type="text" name="acc_motto" value="{motto}" size="30" maxlength="30" id="avatarmotto"></label></p>
											<div style="border-top: 1px dotted; padding-top: 8px; "></div>
											<u><b>Friend Requests</b></u>
											<p>Here you can change your friend requests settings, this will allow/deny friend requests.</p>
											<select name="acc_fr">

  <option selected="selected" value="<?php echo $profileUser['block_newfriends']; ?>" name="acc_fr">Current Set: <?php echo  $profileUser['block_newfriends']; ?></option>

  <option value="0">Friend Requests ON</option>

  <option value="1">Friend Requests OFF</option></select>
											</br></br>
											<div style="border-top: 1px dotted; padding-top: 8px; "></div>
											
											
											<div class="settings-buttons">
                                                <input type="submit" value="Save Changes" name="account" class="submit" style="float:right">
                                            </div>
                                        </form>
</div>



<div id="left_content_bot">



</div>



</div>







<div id="rightbit" style="float: right;width: 332px;">







<div id="right_content_top">



Account Information



</div>



<div style="font-size:12px;" id="right_content_mid">
</br>
<center><img src="/app/tpl/skins/{skin}/images/PNG/info.png"></br><br>

Hey! Welcome (back) to the part of the website where you can change all of your information. Be sure to change information at your own risk and if you face any issues then please contact us via Discord, thank you.

</center>
</div>


<div id="right_content_bot">

</div>

<div id="right_content_top">

Did you know?

</div>

<div id="right_content_mid">

<div id="toprooms">

<?php include("includes/dyk.php");?>

</div>

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
<?php include('/app/tpl/skins/Sleek/includes/checktheban.php'); ?>


</div>

</div>

</body>