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
$here = $_SERVER['PHP_SELF'];
$refresh = "0.5";
header("Refresh: $refresh; url=$here");
$end_time = mktime(0,0,0,7,1,2037); 
date_default_timezone_set("Asia/Hong_Kong");
#echo date("Y.m.d H:i:s T",time())."<br />\n";
#echo date("Y.m.d H:i:s T",$end_time)."<br />\n";
$ten_years = 10*(365*24*60*60) + (2*24*60*60) ;
$do_something = ($end_time + $ten_years) - time();
?>
<p> <?php print "$do_something";?></p>
</body>
</html>