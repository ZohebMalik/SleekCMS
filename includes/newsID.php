<?php
if(isset($_GET['id'])) 
{
$id = mysql_real_escape_string($_GET['id']);
$query = mysql_query( "SELECT * FROM `cms_news` WHERE id = '{$id}'" );
$array = mysql_fetch_array($query);

if ($array == null)
{
$getMax = mysql_fetch_array(mysql_query("SELECT MAX(id) FROM cms_news LIMIT 1"));
header("Location: ".$_CONFIG['hotel']['url']."/news/". $getMax['MAX(id)'] ."");
exit();
}
}
?>

<?php
include_once ('/app/tpl/skins/Sleek/vote.php');
?>