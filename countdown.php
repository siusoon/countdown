<!doctype html>
<html>
<head>
<title>Countdown 2047</title>
<style>
body{
background-color:black;
color: white;
}

p {
text-align: center;
font-size: xx-large;
} 
</style>
</head>
<body>

<?php
$now = $_SERVER['PHP_SELF'];
$refresh = "0.5";
header("Refresh: $refresh; url=$now");
$end_time = mktime(0,0,0,7,1,2037); 
date_default_timezone_set("Asia/Hong_Kong");
#echo date("Y.m.d H:i:s T",time())."<br />\n";
#echo date("Y.m.d H:i:s T",$end_time)."<br />\n";
$remaining_ten_years = 10*(365*24*60*60) + (2*24*60*60) ;
$one_country_two_systems = ($end_time + $remaining_ten_years) - time();
?>
<p> <?php print "$one_country_two_systems";?></p>
</body>
</html>
