<html>
<head>
<title>Text</title>
</head>
<?php
$ar =  fopen("datos.txt","a")  or die("shit's fucked");
fputs($ar, "lmao boy");
fputs($ar, "\n");
fputs($ar, "this funny btw");
echo "all right";
?>
</html>
