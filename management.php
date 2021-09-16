<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">		

	<head>

		<title>{hotelname} - Management</title>
		
		<?php include('/app/tpl/skins/Sleek/favicon/favicon.html'); ?>
		
		<?php include('/app/tpl/skins/Sleek/includes/newsID.php'); ?>

		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/inner_style.css?<?php echo time(); ?>"/>
		
		<script type="text/javascript" src="/app/tpl/skins/{skin}/js/jquery.js?<?php echo time(); ?>"></script>

	</head>


<?php include('/app/tpl/skins/Sleek/includes/main_body.php'); ?>


<div id="widthcontain" style="width: 910px;margin: 0 auto;overflow: auto;">







<div id="leftbit" style="float: left;width: 0px;">







<div id="left_content_top">



<?php
 
$getRanks = mysql_query("SELECT id,name FROM ranks WHERE id = 7 ORDER BY id DESC");

while ($Ranks = mysql_fetch_assoc($getRanks))
{      
        echo ' ' . $Ranks['name'] . '
';
}
?>



</div>



<div id="left_content_mid">



<?php
 
$getRanks = mysql_query("SELECT id,name FROM ranks WHERE id = 7 ORDER BY id DESC");

while ($Ranks = mysql_fetch_assoc($getRanks))
{      
        echo ' <div>        
<div>
';
       
        $getMembers = mysql_query("SELECT username,motto,rank,last_online,online,look FROM users WHERE rank = {$Ranks['id']} ORDER by id");
        echo '<div>';
       
        if (mysql_num_rows($getMembers) > 0)
        {
                $oe = 1;
               
                while ($member = mysql_fetch_assoc($getMembers))
                {
                        if ($oe == 2)
                        {
                                $oe = 1;
                        }
                        else
                        {
                                $oe = 2;
                        }
       $Bans = mysql_query("SELECT * FROM `bans` WHERE `added_by` = '" . $member['username'] . "'");
$BanCount = mysql_num_rows($Bans);
$Tickets = mysql_query("SELECT * FROM `moderation_tickets` WHERE `moderator_id` = '" . $member['id'] . "'");
								$TicketsCount = mysql_num_rows($Tickets);
                        echo '<table width="100%" background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . ';">
                        <tbody>
                                <tr>
                                        <td valign="middle" width="25">
                                                <div style="width: 65px; height: 70px;margin-top:0px; float: left; background: url(https://www.avatar-retro.com/habbo-imaging/avatarimage?figure=' .$member['look'] . '&size=m&direction=3&head_direction=3&action=wav&gesture=sml&frame=1);'.(($member['online'] == 1) ? '' : 'opacity:0.4;').'">
</div>
                                        </td>
                                        <td valign="top">
										<img src="/swf/c_images/album1584/STAFF.gif?<?php echo time(); ?>" align="right" top="5px" title="'.$member['country_title'].'">
                                                </br>
												<strong><a class="custom" href="/home/' .$member['username'] . '">' .$member['username'] . '</a></strong>
												<br />
												<br />
												<p style="font-size: 90%; padding: 0px;"><img src="/app/tpl/skins/{skin}/images/GIF/motto.gif?<?php echo time(); ?>"/> <b>Motto</b>: ' . $member['motto'] . '
											    <p style="font-size: 90%; padding: 0px;"><img src="/app/tpl/skins/{skin}/images/GIF/login.gif?<?php echo time(); ?>"> <b>Last Online</b>: '. date('D, d M Y', $member['last_online']) .'
                                                ';
												
                                               
                                       
                                               
                                        echo '</td>
                                       
                                </tr>
                        </tbody>
                        </table><div style="border: 1px #FFF solid;"></div>
                        ';
                }
        }
        else
        {
                echo '<i>There are no members in this position yet.</i>';
        }
       
        echo '</div>
        </div>
        </div>
 ';
}
?>
							

</div>

<div id="left_content_bot"></div>

<div id="left_content_top">

<?php
 
$getRanks = mysql_query("SELECT id,name FROM ranks WHERE id = 5 ORDER BY id DESC");

while ($Ranks = mysql_fetch_assoc($getRanks))
{      
        echo ' ' . $Ranks['name'] . '
';
}
?>



</div>



<div id="left_content_mid">



<?php
 
$getRanks = mysql_query("SELECT id,name FROM ranks WHERE id = 5 ORDER BY id DESC");

while ($Ranks = mysql_fetch_assoc($getRanks))
{      
        echo ' <div>        
<div>
';
       
        $getMembers = mysql_query("SELECT username,motto,rank,last_online,online,look FROM users WHERE rank = {$Ranks['id']} ORDER by id");
        echo '<div>';
       
        if (mysql_num_rows($getMembers) > 0)
        {
                $oe = 1;
               
                while ($member = mysql_fetch_assoc($getMembers))
                {
                        if ($oe == 2)
                        {
                                $oe = 1;
                        }
                        else
                        {
                                $oe = 2;
                        }
       $Bans = mysql_query("SELECT * FROM `bans` WHERE `added_by` = '" . $member['username'] . "'");
$BanCount = mysql_num_rows($Bans);
$Tickets = mysql_query("SELECT * FROM `moderation_tickets` WHERE `moderator_id` = '" . $member['id'] . "'");
								$TicketsCount = mysql_num_rows($Tickets);
                        echo '<table width="100%" background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . ';">
                        <tbody>
                                <tr>
                                        <td valign="middle" width="25">
                                                <div style="width: 65px; height: 70px;margin-top:0px; float: left; background: url(https://www.avatar-retro.com/habbo-imaging/avatarimage?figure=' .$member['look'] . '&size=m&direction=3&head_direction=3&action=wav&gesture=sml&frame=1);'.(($member['online'] == 1) ? '' : 'opacity:0.4;').'">
</div>
                                        </td>
                                        <td valign="top">
										<img src="/swf/c_images/album1584/HS1.gif?<?php echo time(); ?>" align="right" top="5px" title="'.$member['country_title'].'">
                                                </br>
												<strong><a class="custom" href="/home/' .$member['username'] . '">' .$member['username'] . '</a></strong>
												<br />
												<br />
												<p style="font-size: 90%; padding: 0px;"><img src="/app/tpl/skins/{skin}/images/GIF/motto.gif?<?php echo time(); ?>"/> <b>Motto</b>: ' . $member['motto'] . '
											    <p style="font-size: 90%; padding: 0px;"><img src="/app/tpl/skins/{skin}/images/GIF/login.gif?<?php echo time(); ?>"> <b>Last Online</b>: '. date('D, d M Y', $member['last_online']) .'
												<p style="font-size: 90%; padding: 0px;"><img src="/app/tpl/skins/{skin}/images/GIF/role.gif?<?php echo time(); ?>"> <b>Role</b>: ' . $member['role'] . '</p>
                                                ';
												
                                               
                                       
                                               
                                        echo '</td>
                                       
                                </tr>
                        </tbody>
                        </table><div style="border: 1px #FFF solid;"></div>
                        ';
                }
        }
        else
        {
                echo '<i>There are no members in this position yet.</i>';
        }
       
        echo '</div>
        </div>
        </div>
 ';
}
?>
							

</div>

<div id="left_content_bot"></div>

<div id="left_content_top">



<?php
 
$getRanks = mysql_query("SELECT id,name FROM ranks WHERE id = 4 ORDER BY id DESC");

while ($Ranks = mysql_fetch_assoc($getRanks))
{      
        echo ' ' . $Ranks['name'] . '
';
}
?>



</div>



<div id="left_content_mid">



<?php
 
$getRanks = mysql_query("SELECT id,name FROM ranks WHERE id = 4 ORDER BY id DESC");

while ($Ranks = mysql_fetch_assoc($getRanks))
{      
        echo ' <div>        
<div>
';
       
        $getMembers = mysql_query("SELECT username,motto,rank,last_online,online,look FROM users WHERE rank = {$Ranks['id']} ORDER by id");
        echo '<div>';
       
        if (mysql_num_rows($getMembers) > 0)
        {
                $oe = 1;
               
                while ($member = mysql_fetch_assoc($getMembers))
                {
                        if ($oe == 2)
                        {
                                $oe = 1;
                        }
                        else
                        {
                                $oe = 2;
                        }
       $Bans = mysql_query("SELECT * FROM `bans` WHERE `added_by` = '" . $member['username'] . "'");
$BanCount = mysql_num_rows($Bans);
$Tickets = mysql_query("SELECT * FROM `moderation_tickets` WHERE `moderator_id` = '" . $member['id'] . "'");
								$TicketsCount = mysql_num_rows($Tickets);
                        echo '<table width="100%" background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . ';">
                        <tbody>
                                <tr>
                                        <td valign="middle" width="25">
                                                <div style="width: 65px; height: 70px;margin-top:0px; float: left; background: url(https://www.avatar-retro.com/habbo-imaging/avatarimage?figure=' .$member['look'] . '&size=m&direction=3&head_direction=3&action=wav&gesture=sml&frame=1);'.(($member['online'] == 1) ? '' : 'opacity:0.4;').'">
</div>
                                        </td>
                                        <td valign="top">
										<img src="/swf/c_images/album1584/HS1.gif?<?php echo time(); ?>" align="right" top="5px" title="'.$member['country_title'].'">
                                                </br>
												<strong><a class="custom" href="/home/' .$member['username'] . '">' .$member['username'] . '</a></strong>
												<br />
												<br />
												<p style="font-size: 90%; padding: 0px;"><img src="/app/tpl/skins/{skin}/images/GIF/motto.gif?<?php echo time(); ?>"/> <b>Motto</b>: ' . $member['motto'] . '
											    <p style="font-size: 90%; padding: 0px;"><img src="/app/tpl/skins/{skin}/images/GIF/login.gif?<?php echo time(); ?>"> <b>Last Online</b>: '. date('D, d M Y', $member['last_online']) .'
												<p style="font-size: 90%; padding: 0px;"><img src="/app/tpl/skins/{skin}/images/GIF/role.gif?<?php echo time(); ?>"> <b>Role</b>: ' . $member['role'] . '</p>
                                                ';
												
                                               
                                       
                                               
                                        echo '</td>
                                       
                                </tr>
                        </tbody>
                        </table><div style="border: 1px #FFF solid;"></div>
                        ';
                }
        }
        else
        {
                echo '<i>There are no members in this position yet.</i>';
        }
       
        echo '</div>
        </div>
        </div>
 ';
}
?>
							

</div>

<div id="left_content_bot"></div>

</div>



<div id="rightbit" style="float: right;width: 332px;">



<div id="right_content_top">

A message from the {hotelname} Team

</div>

<div style="font-size:12px;" id="right_content_mid"><div></div><center><img src="/app/tpl/skins/{skin}/images/PNG/hotel_staff.png?<?php echo time(); ?>" style="padding: 5px"></center>

<center>The {hotelname} staff team is one big happy family, each staff member has a different role and duties to fulfil. Most of our team consists of loyal players whom have been around {hotelname} for years, even through difficulties- but this doesn't mean we only recruit old & known players, we recruit those who shine out to us too!
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