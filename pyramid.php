<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pyramid</title>
</head>
<body>
    
<?php
echo "PYRAMID<br>";
for ($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo "*";
    }
    echo "<br>";
}
for ($k=5;$k>=1;$k--)
{
    for($l=1;$l<=$k;$l++)
    {
        echo "*";
    }
    echo "<br>";
}
?>
    
</body>