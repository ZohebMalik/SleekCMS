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

	  
	  
	  <a href="/way">The {hotelname} Way</a>



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







<div id="left_info_box">



<div id="avatar_area">



<img src="https://avatar-retro.com/habbo-imaging/avatarimage?figure={figure}.gif&size=b&action=stand,&direction=2&head_direction=3&gesture=sml&size=m">



</div>







<div id="usernamebox">



<img style="vertical-align:middle" src="/app/tpl/skins/{skin}/images/PNG/welcome.png?<?php echo time(); ?>">



Hey, {username}!



</div>







<div id="mottobox">



<img style="vertical-align:middle" src="/app/tpl/skins/{skin}/images/PNG/motto.png?<?php echo time(); ?>">



	{motto}


</div>







<div id="lastonbox">



<img style="vertical-align:middle" src="/app/tpl/skins/{skin}/images/PNG/time.png?<?php echo time(); ?>">



	{LastSignedIn}


</div>







<div id="creditbox">



<img style="vertical-align:middle" src="/app/tpl/skins/{skin}/images/PNG/credits.png?<?php echo time(); ?>">



	{credits}


</div>







<div id="ducketbox">



<img style="vertical-align:middle" src="/app/tpl/skins/{skin}/images/PNG/duckets.png?<?php echo time(); ?>">



	{duckets}


</div>



<div id="diamondbox">



<img style="vertical-align:middle" src="/app/tpl/skins/{skin}/images/PNG/diamonds.png?<?php echo time(); ?>">



	{diamonds}


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