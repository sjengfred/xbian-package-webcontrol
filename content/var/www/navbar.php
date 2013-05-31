<?php
include 'yourip.php';
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
   margin: 0;
   padding: 0;
}
ul
{
width:740px; /*148 * number buttons */
list-style-type:none;
margin:0 auto;
padding:0;
overflow:hidden;
}
li
{
float:left;
}
a:link,a:visited
{
display:block;
width:140px;
font-weight:bold;
color:#CDCDCD;
background-color:#333333;
text-align:center;
padding:4px;
text-decoration:none;
text-transform:uppercase;
}
a:hover,a:active
{
color:#FFFFFF;
}

</style>
</head>

<body bgcolor="#333333">
<header>
<ul>
<li><a href="<?php echo $yourip; ?>:9095/" target="mainpage">CouchPotato</a></li>
<li><a href="<?php echo $yourip; ?>:9094/" target="mainpage">SickBeard</a></li>
<li><a href="<?php echo $yourip; ?>:9092/" target="mainpage">NZBget</a></li>
<li><a href="<?php echo $yourip; ?>:9096/" target="mainpage">AutoSub</a></li>
<li><a href="system.php" target="mainpage">System</a></li>
</ul>
</header>
</body>
</html>
