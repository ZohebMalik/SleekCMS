<?php
    #    Output easy-to-read numbers
    #    by Sebastian Escudero for Hablore
    function bd_nice_number($n) 
	{
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

<body>

<div id="banner">

<div id="logo" class="logo">

</div>

</div>



<div id="container_top">

</div>


<div id="container_mid">



<div id="navigation">

<ul>



  <li class="dropdown">



    <a href="/me" class="dropbtn">{username}</a>



    <div class="dropdown-content">

	
	  
	  <a href="/account">My Account</a>
	  
	  <a href="/home/{username}">My Profile</a>
	  


    </div>



  </li>



  <li class="dropdown">



    <a href="#" class="dropbtn">Community</a>



    <div class="dropdown-content">


<?php
$to5 = mysql_query("SELECT * FROM cms_news ORDER BY ID DESC LIMIT 1") or die(mysql_error());
?>
<?php $i = 0; while($newsobject = mysql_fetch_assoc($to5)){ $i++; ?>
      <a href="/news/<?php echo $newsobject['id']; ?>">{hotelname} News</a>
<?php }?>


      <a href="/online">Users Online</a>



      <a href="/leaderboards">Hotel Leaderboards</a>

	  
	  
	 <a href="/way">{hotelname} Way</a>



    </div>



  </li>

  

<li class="dropdown">



      <a href="#">Staff</a>

	  
		<div class="dropdown-content">



      <a href="/management">Management Team</a>

	  <a href="/development">Development Team</a>
	  
	  <a href="/moderating">Moderating Team</a>
	  
	  </div>
	  
	  
</li>




  <li class="dropdown">



    <a href="#" class="dropbtn">Shop</a>



    <div class="dropdown-content">



      <a href="/vip">VIP Shop</a>



    </div>



  </li>



<li class="dropdown">


      <a href="#" class="dropbtn">Hotel Discord</a>

	  <div class="dropdown-content">

      <a href="#">General Channel</a>

	  <!--
	
	  <a href="#" target="_blank">Extra Channel 1</a>
	  
	  <a href="#" target="_blank">Extra Channel 2</a>
	  
	  <a href="#" target="_blank">Extra Channel 3</a>
	  
	  !-->
	  
	  </div>
	  

</li>



<div style="float: right;margin: 0 6px 0 0;">

					<?php if($_SESSION['user']['rank'] >= 5) { echo '<li class="dropdown">


      <a href="#" class="dropbtn">Article<font color="#F73131">HK</font></a>

	  <div class="dropdown-content">



      <a href="ase/login" target="_blank">Login</a>

	  <a href="/ase/addnews" target="_blank">Create Article</a>
	  
	  <a href="ase/newsview" target="_blank">Edit/Delete Article</a>
	  
	  </div>
	  

</li>'; } ?>

<li>



      <a href="/online">{online} Online</a>



</li>



<li>



      <a href="/logout">Logout</a>



</li>



</div>



</ul>






</div>


<div id="widthcontain" style="width: 905px;margin: 0 auto;">


<?php include('/app/tpl/skins/Sleek/includes/notice.php'); ?>


<div id="left_area" style="float: left;margin-left: 2.25px; width: 0px">



<?php
                                $home = mysql_query("SELECT * FROM user_stats WHERE id = '" . Filter($_GET['id']) . "' LIMIT 1");
                                if(mysql_num_rows($home) != 1)
                                {
                                $home = mysql_query("SELECT * FROM user_stats WHERE id = '" . $_SESSION['user']['id'] . "' LIMIT 1");
                                }
                                $ustat = mysql_fetch_assoc($home);
                               ?>
 <?php
                                $home = mysql_query("SELECT * FROM users WHERE username = '" . Filter($_GET['user']) . "' LIMIT 1");
                                if(mysql_num_rows($home) != 1)
                                {
                                $home = mysql_query("SELECT * FROM users WHERE username = '" . $_SESSION['user']['username'] . "' LIMIT 1");
                                }
                                $user = mysql_fetch_assoc($home);
                               ?>



<div id="left_info_box">



<div id="avatar_area">



<img src="https://avatar-retro.com/habbo-imaging/avatarimage?figure=<?php echo $user['look']; ?>.gif&size=b&action=stand,&direction=2&head_direction=3&gesture=sml&size=m">



</div>







<div id="usernamebox">



<img style="vertical-align:middle" src="/app/tpl/skins/{skin}/images/PNG/welcome.png?<?php echo time(); ?>">



<?php echo $user['username']; ?>'s Profile



</div>







<div id="mottobox">



<img style="vertical-align:middle" src="/app/tpl/skins/{skin}/images/PNG/motto.png?<?php echo time(); ?>">



	<?php echo $user['motto']; ?>


</div>







<div id="lastonbox">



<img style="vertical-align:middle" src="/app/tpl/skins/{skin}/images/PNG/time.png?<?php echo time(); ?>">



	User ID: <?php echo $user['id']; ?>


</div>







<div id="creditbox">



<img style="vertical-align:middle" src="/app/tpl/skins/{skin}/images/PNG/credits.png?<?php echo time(); ?>">



<?php echo bd_nice_number($user['credits']); ?>


</div>







<div id="ducketbox">



<img style="vertical-align:middle" src="/app/tpl/skins/{skin}/images/PNG/duckets.png?<?php echo time(); ?>">



	<?php echo bd_nice_number($user['activity_points']); ?>


</div>



<div id="diamondbox">



<img style="vertical-align:middle" src="/app/tpl/skins/{skin}/images/PNG/diamonds.png?<?php echo time(); ?>">



	<?php echo bd_nice_number($user['vip_points']); ?>


</div>



</div>







</div>







<div id="right_area" style="float: right;width: 456.25px;">







<div id="right_box">



<div id="right_image">







<a href="/client" target="_blank">



<div id="enter_button">



Enter {hotelname} Hotel



</div>



</a>







</div>



</div>







</div>
<?php
error_reporting(0); 

$getEntries = mysql_query("SELECT * FROM profile_wall WHERE page_id = '".$user['id']."' ORDER by id DESC");
						
						
						if(isset($_POST['_commentSubmit']))
 
                        if (empty($_POST['_fullMessage']))
                        $_POST['message'] = '';
 
                       $message = strip_tags (($_POST['_fullMessage']));
                        if($message == NULL){
                        }else{
                        if (isLogged)
                        {
                        mysql_query("INSERT INTO profile_wall (page_id, poster_id, message) VALUES ('" .$user['id']. "', '" . $_SESSION['user']['id']. "', '" .filter($message). "')") or die(mysql_error());
                          }
                          header("location: #Posted"); 
                        exit;
                        }
               
                        $userstat = mysql_query("SELECT * FROM `user_stats` WHERE `id` = '" .$GrabInfo['id']. "' ") or die(mysql_error());
						
						?>