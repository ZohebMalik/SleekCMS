<!DOCTYPE html>

<?php include('/app/tpl/skins/Sleek/includes/checktheban.php'); ?>

<?php include('vote.php'); ?>

<html>
  <head>
    <meta https-equiv="content-type" content="text/html; charset=utf-8">
    <title>Hotel - {hotelname} Client</title>
		<link rel="shortcut icon" href="/app/tpl/skins/{skin}/favicon/favicon.ico" type="image/vnd.microsoft.icon"/>
		<link rel="stylesheet" href="/app/tpl/skins/{skin}/css/client.css?<?php echo time(); ?>" type="text/css">
		<link rel="stylesheet" href="/app/tpl/skins/{skin}/css/client_radio.css?<?php echo time(); ?>" type="text/css">
	
    <script type="text/javascript" src="/app/tpl/skins/{skin}/js/swfobject.js">
    </script>
    <script type="text/javascript">
      var BaseUrl = "{swf_folder}/";
      var flashvars =
          {
            "client.starting.revolving" : "{hotelname} requests you to report any issue to staff members/Welcome back to {hotelname} Hotel/Time is just an illusion, a creation of man./Are we there yet?/Did you know that {hotelname} runs off a theme named Sleek?/Close your eyes and count to three.. Client has loaded!/Loading../Almost there../Remember, we\'re mere pixels!",
            "client.allow.cross.domain" : "1", 
            "client.notify.cross.domain" : "0", 
            "connection.info.host" : "{proxy}", 
            "connection.info.port" : "{server_port}", 
            "site.url" : "https://bang.cf", 
            "url.prefix" : "https://bang.cf", 
            "client.reload.url" : "https://bang.cf/client", 
            "client.reload.url" : "https://bang.cf/disconnected", 
            "client.fatal.error.url" : "https://bang.cf/disconnected", 
            "logout.url" : "https://bang.cf/disconnected", 
            "logout.disconnect.url" : "https://bang.cf/disconnected", 
            "client.connection.failed.url" : "https://bang.cf/disconnected", 
            "external.variables.txt" : "https://bang.cf/swf/gamedata/external_variables.txt?<?php echo time(); ?>", 
            "external.texts.txt" : "https://bang.cf/swf/gamedata/external_flash_texts.txt?<?php echo time(); ?>",
            "external.figurepartlist.txt" : "https://bang.cf/swf/gamedata/figuredata.xml?<?php echo time(); ?>",
            "external.override.texts.txt" : "https://bang.cf/swf/gamedata/external_flash_override_texts.txt?<?php echo time(); ?>",
            "external.override.variables.txt" : "https://bang.cf/swf/gamedata/external_override_variables.txt?<?php echo time(); ?>",
            "productdata.load.url" : "https://bang.cf/swf/gamedata/productdata.txt?<?php echo time(); ?>", 
            "furnidata.load.url" : "https://bang.cf/swf/furnidata.xml?<?php echo time(); ?>",  
            "use.sso.ticket" : "1", 
            "sso.ticket" : "{sso}",
            "processlog.enabled" : "0", 
            "flash.client.url" : BaseUrl, 
            "flash.client.origin" : "popup" 
          };
      var params =
          {
            "base" : BaseUrl,
            "allowScriptAccess" : "always",
            "menu" : "false"                
          };
      swfobject.embedSWF("{swf_folder}/Bang.swf?<?php echo time(); ?>", "client", "100%", "100%", "10.0.0", "{swf_folder}/expressInstall.swf?<?php echo time(); ?>", flashvars, params, null);
    </script>
	
  </head> 
  <body>
  <div id="client"></div>
	 <?php include('/app/tpl/skins/Sleek/includes/radio.php'); ?>
	    
 </body>
</html>
