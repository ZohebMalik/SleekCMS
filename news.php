<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">		

	<head>

		<title>{hotelname} - Hotel News</title>
		
		<link rel="shortcut icon" href="/app/tpl/skins/{skin}/favicon/favicon.ico" type="image/vnd.microsoft.icon"/>
		
		<?php include('/app/tpl/skins/Sleek/includes/newsID.php'); ?>

		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/inner_style.css?<?php echo time(); ?>"/>
		
		<script type="text/javascript" src="/app/tpl/skins/{skin}/js/jquery.js?<?php echo time(); ?>"></script>

	</head>


<?php include('/app/tpl/skins/Sleek/includes/main_body.php'); ?>


<div id="widthcontain" style="width: 910px;margin: 0 auto;overflow: auto;">







<div id="leftbit" style="float: left;width: 0px;">







<div id="left_content_top">



{newsTitle}



</div>



<div id="left_content_mid">


</br>
<center><img src="{url}/app/tpl/skins/{skin}/images/PNG/news.png?<?php echo time(); ?>" style="padding: 5px"/></center>


{newsContent}
							
<p><i>Yours truly,<p><b>- {NewsAuthor}</b></i></p></p>
							
</div>


<div id="left_content_bot"></div>

</div>




<div id="rightbit" style="float: right;width: 332px;">







<div id="right_content_top">



News List



</div>



<div id="right_content_mid">
<ul>

                                        <?php
    {
    for ($i = 0; $i < 6; $i++)
        {
            $sectionName = "";
            $sectionCutoffMax = 0;
            $sectionCutoffMin = 0;
        
            switch ($i)
            {
                    case 0:
                
                            $sectionName = 'Today';
                            $sectionCutoffMax = time();
                            $sectionCutoffMin = time() - 86400;
                            break;
                        
                    case 1:
                
                            $sectionName = 'Yesterday';
                            $sectionCutoffMax = time() - 86400;
                            $sectionCutoffMin = time() - 172800;
                            break;
                        
                    case 2:
                
                            $sectionName = 'This week';
                            $sectionCutoffMax = time() - 172800;
                            $sectionCutoffMin = time() - 604800;
                            break;
                        
                    case 3:
                
                            $sectionName = 'Last week';
                            $sectionCutoffMax = time() - 604800;
                            $sectionCutoffMin = time() - 1209600;
                            break;
                        
                    case 4:
                
                            $sectionName = 'This month';
                            $sectionCutoffMax = time() - 1209600;
                            $sectionCutoffMin = time() - 2592000;
                            break;
                        
                    case 5:
                
                            $sectionName = 'Last month';
                            $sectionCutoffMax = time() - 2592000;
                            $sectionCutoffMin = time() - 5184000;
                            break;
            }
        
            $q = "SELECT * FROM cms_news WHERE published >= " . $sectionCutoffMin . " AND published <= " . $sectionCutoffMax .  " ORDER BY published DESC";
            $getArticles = mysql_query($q);
            if (mysql_num_rows($getArticles) > 0)
            {
                    echo '<u><h4>' . $sectionName . '</h4></u>';
                
                    while ($a = mysql_fetch_assoc($getArticles))
                    {
                        if($a['id'] == $_GET['id'])
                        {
                        echo '<b>' . $a['title'] . '&nbsp;&raquo;</br></br></b>';
                        }
                        else
                        {
                        echo '<a class="custom2" href="/news/' . $a['id'] . '">' . $a['title'] . '&nbsp;&raquo;</a></br></br>';
                        }
                    }
            }
        }
    }
?>
                                    
						</u>
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