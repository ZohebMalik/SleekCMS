<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
function relativeTime($time){
$SECOND = 1;
$MINUTE = 60 * $SECOND;
$HOUR = 60 * $MINUTE;
$DAY = 24 * $HOUR;
$MONTH = 30 * $DAY;
$before = $time;
if ($before < 0) { return "No time at all"; }
if ($before < 1 * $MINUTE) { return "just now"; }
if ($before < 2 * $MINUTE) { return "About a minute"; }
if ($before < 45 * $MINUTE) { return floor($before / 60) . "</b> Minutes "; }
if ($before < 90 * $MINUTE) { return "</b> About an hour"; }
if ($before < 24 * $HOUR) { return (floor($before / 60 / 60) == 1 ? 'About an hour' : floor($before / 60 / 60) . '</b> Hours');}
if ($before < 48 * $HOUR) { return "</b> Just over a day"; }
if ($before < 30 * $DAY) { return floor($before / 60 / 60 / 24) . "</b> Days"; }
if ($before < 12 * $MONTH) { $months = floor($before / 60 / 60 / 24 / 30); return $months <= 1 ? "About one month" : $months . "</b> Months";
} else { $years = floor($before / 60 / 60 / 24 / 30 / 12); return $years <= 1 ? "About one year" : $years . "</b> years";
} return "$time";
}

# from lol to lol with love
function number($n){
// first strip any formatting;
$n = (0+str_replace(",","",$n));

// is this a number?
if(!is_numeric($n)) return false;

// now filter it;
else if($n>1000000000) return round(($n/1000000000),1).'B';
else if($n>1000000) return round(($n/1000000),1).'M';
else if($n>1000) return round(($n/1000),1).'K';

return number_format($n);
}
?>
<html xmlns="https://www.w3.org/1999/xhtml">		

	<head>

		<title>{hotelname} - Hotel Leaderboards</title>
		
		<?php include('/app/tpl/skins/Sleek/favicon/favicon.html'); ?>
		
		<?php include('/app/tpl/skins/Sleek/includes/newsID.php'); ?>

		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/inner_style.css?<?php echo time(); ?>"/>
		
		<script type="text/javascript" src="/app/tpl/skins/{skin}/js/jquery.js?<?php echo time(); ?>"></script>

	</head>

<?php include('/app/tpl/skins/Sleek/includes/main_body.php'); ?>

<div id="widthcontain" style="width: 910px;margin: 0 auto;overflow: auto;">











<div id="main_content_top">

Ranking of users on {hotelname}'s leaderboards

</div>







<div id="main_content_mid" style="overflow: auto;">



<div style="width: 263px;float: left;border-radius: 3px;border: 1px solid rgba(0, 0, 0, 0.04);padding: 5px 5px 6px 5px;background-color: rgba(0, 0, 0, 0.04);margin: 6px 0 4px 15px;">

<center><b>Highest Ranking for Credits</b></center>

<hr>

<div style="width: 240px;border-radius: 3px;border: 1px solid rgba(0, 0, 0, 0.04);padding: 5px 5px 6px 5px;background-color: rgba(0, 0, 0, 0.04);margin: 6px 0 4px 5px;">

<?php $count = 0;
						$row = mysql_query("SELECT * FROM users WHERE rank < 3 ORDER BY credits DESC LIMIT 7");
						while($sql = mysql_fetch_assoc($row)): $count++;
if ($sql['online'] == 0) {
$aanweziig = "opacity:0.4;";
} else {
$aanweziig = "";
}							?>
						
						<?php if( $count %2 == 0 ) { $styles = "background-color:#ECECEC;border-top:1px dashed #CCCCCC;border-bottom:1px dashed #CCCCCC;"; } else { $styles = false; } ?>
				
				<table width="102%" height="64px" style="margin-left:-3px;background-color:#fff; <?php echo $styles; ?>">
				<tbody>
				<tr>
					<td valign="middle" width="25" height="50px">
					<?php if( $count == 1 ): ?>
						<img style="margin-top:-15px;margin-bottom:-10px;<?php echo $aanweziig; ?>" src="https://www.avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&amp;gesture=sml&amp;direction=3&amp;size=sml&headonly=1 ">
					<?php else: ?>
						<img style="margin-top:-15px;margin-bottom:-10px;<?php echo $aanweziig; ?>" src="https://www.avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&amp;gesture=sml&amp;direction=2&amp;size=sml&headonly=1 ">
					<?php endif; ?>
					</td>
					<td valign="top">
						<p style="margin-top:5px;">
							<strong><a class="custom" href="/home/<?php echo $sql['username']; ?>"><?php echo $sql['username']; ?></a></strong></p>
						<p style="margin-top:-7px;"><font color="grey"><?php echo number_format($sql['credits']); ?></b> Credits</font></p>
						
						<?php switch( $count ) {
							
							case 1:
								echo '<img style="float:right;margin-top:-35px;margin-right:10px;" src="/app/tpl/skins/{skin}/images/medals/PNG/gold.png?<?php echo time(); ?>">';
								break;
							case 2:
								echo '<img style="float:right;margin-top:-35px;margin-right:10px;" src="/app/tpl/skins/{skin}/images/medals/PNG/silver.png?<?php echo time(); ?>">';
								break;
							case 3:
								echo '<img style="float:right;margin-top:-35px;margin-right:10px;" src="/app/tpl/skins/{skin}/images/medals/PNG/bronze.png?<?php echo time(); ?>">';
								break;
								
							default:
							break;
							
						} ?>
						</td>
				</tr>
				</tbody>
			</table>
			<?php endwhile; ?>





</div>






</div>



<div style="width: 263px;float: left;border-radius: 3px;border: 1px solid rgba(0, 0, 0, 0.04);padding: 5px 5px 6px 5px;background-color: rgba(0, 0, 0, 0.04);margin: 6px 0 4px 15px;">

<center><b>Highest Ranking for Duckets</b></center>

<hr>

<div style="width: 240px;border-radius: 3px;border: 1px solid rgba(0, 0, 0, 0.04);padding: 5px 5px 6px 5px;background-color: rgba(0, 0, 0, 0.04);margin: 6px 0 4px 5px;">

<?php $count = 0;
						$row = mysql_query("SELECT * FROM users WHERE rank < 3 ORDER BY activity_points DESC LIMIT 7");
						while($sql = mysql_fetch_assoc($row)): $count++;
if ($sql['online'] == 0) {
$aanweziig = "opacity:0.4;";
} else {
$aanweziig = "";
}							?>
						
						<?php if( $count %2 == 0 ) { $styles = "background-color:#ECECEC;border-top:1px dashed #CCCCCC;border-bottom:1px dashed #CCCCCC;"; } else { $styles = false; } ?>
				
				<table width="102%" height="64px" style="margin-left:-3px;background-color:#fff; <?php echo $styles; ?>">
				<tbody>
				<tr>
					<td valign="middle" width="25" height="50px">
					<?php if( $count == 1 ): ?>
						<img style="margin-top:-15px;margin-bottom:-10px;<?php echo $aanweziig; ?>" src="https://www.avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&amp;gesture=sml&amp;direction=3&amp;size=sml&headonly=1 ">
					<?php else: ?>
						<img style="margin-top:-15px;margin-bottom:-10px;<?php echo $aanweziig; ?>" src="https://www.avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&amp;gesture=sml&amp;direction=2&amp;size=sml&headonly=1 ">
					<?php endif; ?>
					</td>
					<td valign="top">
						<p style="margin-top:5px;">
							<strong><a class="custom" href="/home/<?php echo $sql['username']; ?>"><?php echo $sql['username']; ?></a></strong></p>
						<p style="margin-top:-7px;"><font color="grey"><?php echo number_format($sql['activity_points']); ?></b> Duckets</font></p>
						
						<?php switch( $count ) {
							
							case 1:
								echo '<img style="float:right;margin-top:-35px;margin-right:10px;" src="/app/tpl/skins/{skin}/images/medals/PNG/gold.png?<?php echo time(); ?>">';
								break;
							case 2:
								echo '<img style="float:right;margin-top:-35px;margin-right:10px;" src="/app/tpl/skins/{skin}/images/medals/PNG/silver.png?<?php echo time(); ?>">';
								break;
							case 3:
								echo '<img style="float:right;margin-top:-35px;margin-right:10px;" src="/app/tpl/skins/{skin}/images/medals/PNG/bronze.png?<?php echo time(); ?>">';
								break;
								
							default:
							break;
							
						} ?>
						</td>
				</tr>
				</tbody>
			</table>
			<?php endwhile; ?>





</div>






</div>



<div style="width: 263px;float: left;border-radius: 3px;border: 1px solid rgba(0, 0, 0, 0.04);padding: 5px 5px 6px 5px;background-color: rgba(0, 0, 0, 0.04);margin: 6px 0 4px 15px;">

<center><b>Highest Ranking for Diamonds</b></center>

<hr>

<div style="width: 240px;border-radius: 3px;border: 1px solid rgba(0, 0, 0, 0.04);padding: 5px 5px 6px 5px;background-color: rgba(0, 0, 0, 0.04);margin: 6px 0 4px 5px;">

<?php $count = 0;
						$row = mysql_query("SELECT * FROM users WHERE rank < 3 ORDER BY vip_points DESC LIMIT 7");
						while($sql = mysql_fetch_assoc($row)): $count++;
if ($sql['online'] == 0) {
$aanweziig = "opacity:0.4;";
} else {
$aanweziig = "";
}							?>
						
						<?php if( $count %2 == 0 ) { $styles = "background-color:#ECECEC;border-top:1px dashed #CCCCCC;border-bottom:1px dashed #CCCCCC;"; } else { $styles = false; } ?>
				
				<table width="102%" height="64px" style="margin-left:-3px;background-color:#fff; <?php echo $styles; ?>">
				<tbody>
				<tr>
					<td valign="middle" width="25" height="50px">
					<?php if( $count == 1 ): ?>
						<img style="margin-top:-15px;margin-bottom:-10px;<?php echo $aanweziig; ?>" src="https://www.avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&amp;gesture=sml&amp;direction=3&amp;size=sml&headonly=1 ">
					<?php else: ?>
						<img style="margin-top:-15px;margin-bottom:-10px;<?php echo $aanweziig; ?>" src="https://www.avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>&amp;gesture=sml&amp;direction=2&amp;size=sml&headonly=1 ">
					<?php endif; ?>
					</td>
					<td valign="top">
						<p style="margin-top:5px;">
							<strong><a class="custom" href="/home/<?php echo $sql['username']; ?>"><?php echo $sql['username']; ?></a></strong></p>
						<p style="margin-top:-7px;"><font color="grey"><?php echo number_format($sql['vip_points']); ?></b> Diamonds</font></p>
						
						<?php switch( $count ) {
							
							case 1:
								echo '<img style="float:right;margin-top:-35px;margin-right:10px;" src="/app/tpl/skins/{skin}/images/medals/PNG/gold.png?<?php echo time(); ?>">';
								break;
							case 2:
								echo '<img style="float:right;margin-top:-35px;margin-right:10px;" src="/app/tpl/skins/{skin}/images/medals/PNG/silver.png?<?php echo time(); ?>">';
								break;
							case 3:
								echo '<img style="float:right;margin-top:-35px;margin-right:10px;" src="/app/tpl/skins/{skin}/images/medals/PNG/bronze.png?<?php echo time(); ?>">';
								break;
								
							default:
							break;
							
						} ?>
						</td>
				</tr>
				</tbody>
			</table>
			<?php endwhile; ?>





</div>






</div>



<div id="main_content_bot">


</div></div></div></div></div>



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