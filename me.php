<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">		

	<head>

		<title>{hotelname} - Home Page</title>
		
		<?php include('/app/tpl/skins/Sleek/favicon/favicon.html'); ?>
		
		<?php include('/app/tpl/skins/Sleek/includes/newsID.php'); ?>

		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/inner_style.css?<?php echo time(); ?>"/>
		
		<script type="text/javascript" src="/app/tpl/skins/{skin}/js/jquery.js?<?php echo time(); ?>"></script>

	</head>


<?php include('/app/tpl/skins/Sleek/includes/main_body.php'); ?>


<div id="widthcontain" style="width: 910px;margin: 0 auto;overflow: auto;">



<div id="leftbit" style="float: left;width: 0px;">



<div id="left_content_top">

Latest News

</div>

<div id="left_content_mid">





<?php
$to4 = mysql_query("SELECT * FROM cms_news ORDER BY ID DESC LIMIT 4") or die(mysql_error());
?>

<?php $i = 0; while($newsobject = mysql_fetch_assoc($to4)){ $i++; ?>

<div style="box-shadow: inset 0 0 0 1px rgba(0,0,0,.25), inset 0 2px 0 1px rgba(255,255,255,.25);border-radius: 10px;height: 260px;width: 522px;background: url(/app/tpl/skins/{skin}/images/web_promo/<?php echo $newsobject['image']; ?>)<?php if($i != '1'){ ?>; display: none<?php } ?>">



<div style="font-size: 20px;font-weight: bold;position: absolute;margin: 20px 0 0 22px;color: #fff;">

<?php echo $newsobject['title']; ?>

</div>



<div style="font-size: 13px;position: absolute;margin: 46px 0 0 22px;color: #fff;">

<?php echo $newsobject['shortstory']; ?>

</div>

<a href="/news/<?php echo $newsobject['id']; ?>">

<div id="enter_button" style="margin: 190px 32px 0 0;float: right;/* position: fixed; */margin-top: 170px;margin-left: 345px;;">

Read More

</div></a>



</div>
<?php } ?>


<?php
$to3 = mysql_query("SELECT * FROM cms_news ORDER BY ID DESC LIMIT 3") or die(mysql_error());
?>

<?php $i = 0; while($newsobject = mysql_fetch_assoc($to3)){ $i++; ?>


<div style="width: 155px;float: left;border-radius: 3px;border: 1px solid rgba(0, 0, 0, 0.04);padding: 5px 5px 6px 5px;background-color: rgba(0, 0, 0, 0.04);margin: 6px 0 4px 5px;">

<div style="margin-bottom:5px;"><center><b><font color="#595959"><?php echo $newsobject['title']; ?></center></font></b></div><a href="/news/<?php echo $newsobject['id']; ?>">

<div style="box-shadow: inset 0 0 0 1px rgba(0,0,0,.25), inset 0 2px 0 1px rgba(255,255,255,.25);border-radius: 10px;height: 60px;width: 155px;background: url(/app/tpl/skins/{skin}/images/web_promo/<?php echo $newsobject['image']; ?>)<?php if($i != '1'){ ?>; background-position: right<?php } ?>">

</div></a>





</div>
<?php } ?>


</div>

<div id="left_content_bot">

</div>

<div id="left_content_top">Events Timetable</div>

<div id="left_content_mid">




<br>
<center><img src="/app/tpl/skins/{skin}/images/PNG/frank_confused.png?<?php echo time(); ?>"></center>
<br>

<center>Oops, it appears we do not have any events scheduled for today!</center>




</div>

<div id="left_content_bot"></div>

</div>



<div id="rightbit" style="float: right;width: 332px;">



<div id="right_content_top">

Welcome (back) to {hotelname}!

</div>

<div style="font-size:12px;" id="right_content_mid"><div style="margin-bottom:10px;"><center><img src="/app/tpl/skins/{skin}/images/PNG/team.png?<?php echo time(); ?>"></center></div><center>

Hello {username}, welcome (back) to {hotelname} Hotel! We're delighted to see you (again) and can't wait to meet you in-game, check in to check us out! Events are hosted throughout the day by our dedicated staff team so you've a chance to win credits, rares, and maybe even diamonds. Try your best to get ranked up on the leaderboards as you may become more popular than ever!</center>

</div>

<div id="right_content_bot">



</div><div id="right_content_top">CapitalFM Radio</div>

<div id="right_content_mid">





<div id="statistics">

</div>





<center><div><audio id="player" src="/app/tpl/skins/{skin}/includes/radio.php" autostart="0"></audio>

<img src="/app/tpl/skins/{skin}/images/radio/PNG/play.png" style="cursor:pointer;margin-top:7px;" onclick="document.getElementById('player').play()">

<img src="/app/tpl/skins/{skin}/images/radio/PNG/pause.png" style="cursor:pointer;margin-top:7px;" onclick="document.getElementById('player').pause()">

<img src="/app/tpl/skins/{skin}/images/radio/PNG/volumedown.png" style="cursor:pointer;margin-top:7px;" onclick="document.getElementById('player').volume -= 0.1">

<img src="/app/tpl/skins/{skin}/images/radio/PNG/volumeup.png" style="cursor:pointer;margin-top:7px;" onclick="document.getElementById('player').volume += 0.1">

<img src="/app/tpl/skins/{skin}/images/radio/PNG/mute.png" style="cursor:pointer;margin-top:7px;" onclick="document.getElementById('player').volume = 0">

<img src="/app/tpl/skins/{skin}/images/radio/PNG/unmute.png" style="cursor:pointer;margin-top:7px;" onclick="document.getElementById('player').volume = 1">

</div></center>

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