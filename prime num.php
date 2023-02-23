<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primenumber</title>
</head>
<body>
    
<?php
echo "primenumber<br>";
   for($i=2;$i<=100;$i++)
   {
    for($j=2;$j<$i;$j++)
    {
        if($i%$j==0)
        {
            break;
        }
    }
    if($j==$i)
    {
        echo $i." ";
    }
   }









?>
    
</body>