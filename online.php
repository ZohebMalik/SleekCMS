<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">		

	<head>

		<title>{hotelname} - Online Members</title>
		
		<?php include('/app/tpl/skins/Sleek/favicon/favicon.html'); ?>
		
		<?php include('/app/tpl/skins/Sleek/includes/newsID.php'); ?>

		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/inner_style.css?<?php echo time(); ?>"/>
		
		<script type="text/javascript" src="/app/tpl/skins/{skin}/js/jquery.js?<?php echo time(); ?>"></script>

	</head>


<?php include('/app/tpl/skins/Sleek/includes/main_body.php'); ?>


<div id="widthcontain" style="width: 910px;margin: 0 auto;overflow: auto;">







<div id="leftbit" style="float: left;width: 0px;">







<div id="left_content_top">



Online Users



</div>



<div id="left_content_mid">



<?php
                            $GetTrusted = mysql_query("SELECT * FROM users WHERE rank = '1' AND online='1' ORDER BY id DESC");
                                echo "<div><div><div>";
                                while($Dealers = mysql_fetch_assoc($GetTrusted))
                                {
                                    if($Dealers['online'] == 1){ $OnlineStatus = "<img style=\"float: right;\" src='/app/tpl/skins/{skin}/images/GIF/online.gif'/> "; } else { $OnlineStatus = "<img style=\"float: right;\" src='/app/tpl/skins/{skin}/images/PNG/offline.gif'/> "; }
                                    echo "<div style='float:left'><img position:absolute; src='https://www.avatar-retro.com/habbo-imaging/avatarimage?figure={$Dealers['look']}&size=b&direction=2&head_direction=2&headonly=1&gesture=sml&size=2'></div>"
                                  ."<p style=\"font-size: 90%; padding: 0px;\"><img src=\"/app/tpl/skins/{skin}/images/PNG/motto.png\"/> <b>Username:</b> <a class='custom' href='/home/{$Dealers['username']}'>{$Dealers['username']}</a> {$OnlineStatus}
								  <br>
								  <p style=\"font-size: 90%; padding: 0px;\"><img src=\"/app/tpl/skins/{skin}/images/GIF/motto.gif\"/> <b>Motto:</b> &nbsp;{$Dealers['motto']}</p>
								  <p style=\"font-size: 90%; padding: 0px;\"><img src=\"/app/tpl/skins/{skin}/images/GIF/login.gif\"/> <b>Registered:</b> ". date('D, d M Y', $Dealers['account_created']) ."</p><hr>";
                                }
								
                                echo "</div></div></div>"
								;
                        ?>
							

</div>


<div id="left_content_bot"></div>

</div>



<div id="rightbit" style="float: right;width: 332px;">



<div id="right_content_top">

Online Staff

</div>

<div style="font-size:12px;" id="right_content_mid"><div></div>


 <?php
                            $GetTrusted = mysql_query("SELECT * FROM users WHERE rank >= '2' AND online='1' ORDER BY id DESC");
                                echo "<div><div><div>";
                                while($Dealers = mysql_fetch_assoc($GetTrusted))
                                {
                                    if($Dealers['online'] == 1){ $OnlineStatus = "<img style=\"float: right;\" src='/app/tpl/skins/{skin}/images/GIF/online.gif'/> "; } else { $OnlineStatus = "<img style=\"float: right;\" src='/app/tpl/skins/{skin}/images/GIF/offline.gif'/> "; }
                                    echo "<div style='float:left'><img position:absolute; src='https://www.avatar-retro.com/habbo-imaging/avatarimage?figure={$Dealers['look']}&size=b&direction=2&head_direction=2&headonly=1&gesture=sml&size=2'></div>"
                                  ."<p style=\"font-size: 90%; padding: 0px;\"><img src=\"/app/tpl/skins/Sleek/images/PNG/motto.png\"/> <b>Username:</b> <a class='custom' href='/home/{$Dealers['username']}'>{$Dealers['username']}</a> {$OnlineStatus}
								  <br>
								  <p style=\"font-size: 90%; padding: 0px;\"><img src=\"/app/tpl/skins/{skin}/images/GIF/motto.gif\"/> <b>Motto:</b> &nbsp;{$Dealers['motto']}</p>
								  <p style=\"font-size: 90%; padding: 0px;\"><img src=\"/app/tpl/skins/{skin}/images/GIF/login.gif\"/> <b>Registered:</b> ". date('D, d M Y', $Dealers['account_created']) ."</p><hr>";
                                }
                                echo "</div></div></div>";
                        ?>
						
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