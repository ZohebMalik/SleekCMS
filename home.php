<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">		

	<head>

		<title>{hotelname} - Home Profile</title>
		
		<link rel="shortcut icon" href="/app/tpl/skins/{skin}/favicon/favicon.ico" type="image/vnd.microsoft.icon"/>
		
		<?php include('/app/tpl/skins/Sleek/includes/newsID.php'); ?>

		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/inner_style.css?<?php echo time(); ?>"/>
		
		<script type="text/javascript" src="/app/tpl/skins/{skin}/js/jquery.js?<?php echo time(); ?>"></script>

	</head>

	
<?php include('/app/tpl/skins/Sleek/includes/home.php'); ?>


<div id="widthcontain" style="width: 910px;margin: 0 auto;overflow: auto;">







<div id="leftbit" style="float: left;width: 0px;">







<div id="left_content_top">



Profile Comments



</div>



<div id="left_content_mid">



<?php
 
                                if(mysql_num_rows($getEntries) == 0) {
                                echo "<i>No comments have been made on this profile yet.</i>";
                                } else {
                                                       
                                echo '';
                                while($Entries = mysql_fetch_array($getEntries)){
                                $getUserInfo = mysql_query("SELECT * FROM users WHERE id = '".$Entries['poster_id']."'");
                                $userInfo = mysql_fetch_array($getUserInfo);
                                echo '
								
								<div style="width:511.5px;overflow:auto;padding:5px;">
                                
								<div> 
                                <span style="float:left"><a class="custom" href="{url}/home/'.$userInfo['username'].'">
								<img src="https://www.avatar-retro.com/habbo-imaging/avatarimage?figure='.$userInfo['look'].'&head_direction=2&gesture=sml&headonly=1&size=s" style="float: left; margin-top: -8px;">
								
								
								<span><b>'.$userInfo['username'].'</b>
								
								
								</a></span></div>
								
                                <br/><br/>
                               <font color="white"><div style=\'background-color:#233654;padding:5px;border-radius:5px;border-style:solid;border-color:#595959;border-width:1px;\'>
                              '.$Entries['message'].'  </div></font>
                                </div>
								
								';
                                }
                                echo '';
                                }
                        ?>

							

</div>

<div id="left_content_bot"></div>

</div>



<div id="rightbit" style="float: right;width: 332px;">



<div id="right_content_top">

<?php echo $user['username']; ?>'s Badges

</div>

<div id="right_content_mid"><div>

<?php
						$getBadges = mysql_query("SELECT * FROM `user_badges` WHERE `user_id` = '".$user['id']."' ORDER BY rand() LIMIT 13");
						if (mysql_num_rows($getBadges) == 0)
							echo '<i>This user is not wearing any badges yet.</i>';
						else 
						{
							while ($badgeInfo = mysql_fetch_array($getBadges)) 
							{		
								echo '<img src="{url}/swf/c_images/album1584/'.$badgeInfo['badge_id'].'.gif" style="display:inline;" draggable="false">';	
							}
						}	
						
						?>

</div></div>

<div id="right_content_bot">



</div>

<div id="right_content_top">

Post a Comment

</div>

<div id="right_content_mid">

<form method="post">
		
				<?php
                    $userData = mysql_fetch_array(mysql_query("SELECT `vip_points`,`real_nam1e` FROM `users` WHERE `id` = '".$_SESSION['user']['id']."'"));			
			if ($userData['real_nam1e'] == 0)
			{
				
                    echo '
					
					<div style="padding: 5px;text-align: center;">			
				
                                       <form method="post">
					
						<textarea name="_fullMessage" style="width:96%; max-width:96%; min-height:80px" ="Write in this guestbook "></textarea>
						<br>
						<input type="submit" class="submit" name="_CommentSubmit" value="Post Comment"/>

					</form>
                       
                        
                        </div></div>
                        

';
                   }else{
echo '
					<div style="padding: 5px;text-align: center;">			
				
                        <textarea name="testingacc" disabled="disabled" style="width:96%; max-width:96%; min-height:80px" placeholder="This user has disabled commenting on their guestbook!"></textarea>
						<input type="submit" class="submit" name="testingacc" value="Add Entry"/>
						</div>
                        </div>
					

';
}

?>							  			  
					</form>

<div id="right_content_bot">

</div>

<div id="right_content_top">

Search another Profile

</div>

<div id="right_content_mid">

<center><?php

			$sql = mysql_query("SELECT username FROM users WHERE username = '".$_POST['user']."'");
			if(isset($_POST['search_submit']))
			{
				if (empty($_POST['user']))
				{
					echo '<div>
					<div>Please enter a username.</div>
					</div>';
				}
			else
			{
				if (mysql_num_rows($sql) > 0)
				{
				
				$query = $_POST['user'];
				header ("Location: /home/$query");
				}
				else
				{
					echo '<div>
					<div>That user does not exist.</div>
					';
				}
			}
			}
			?></br>
						<form method="post">
					<input type="text" placeholder="Enter a username..." name="user" style="padding:3.5px;margin-left: 4px">
					<br><br>
					<input type="submit" name="search_submit" value="Search" style="padding:3.5px;" class="submit">
				</form></center>
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