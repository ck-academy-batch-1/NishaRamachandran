<h1> PHP Date Functions</h1>
<?php
echo "Today is ".date("l")."<hr><br>";
echo "Today is ".date("Y/m/d")."(y/m/d)"."<hr><br>";
echo "Today is ".date("d:Y:m")."(d/y/m)"."<hr><br>";
echo "Today is ".date("m-d-Y")."(m/d/y)";
?>
<h1> PHP Time Functions</h1>
<?php
echo "its time ".date("H:i:sa")."<hr><br>";
?>
&copy; 2010-<?php echo date("Y");?>
<?php
$t=mktime(5, 30, 00, 3, 1, 2023);
echo  "Created date is " . date("Y-m-d h:i:sa", $t);
?>
<hr>
<?php
$d=strtotime("10:30pm july 31 2017");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<hr>
<?php
date_default_timezone_set("asia/kolkata");
echo "its time now"." ".date("h:i:sa");
?>
