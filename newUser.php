<?php
//$newFileName=$_POST[];  //set the variable name
$newFileName="testName.php";
$htmlContent=""; 

$fp=fopen("userData.txt","r");
while($data=fgets($fp))
{
$htmlContent=$htmlContent.$data;
}
fclose($fp);





$newPage=fopen($newFileName,"w");
fwrite($newPage,$htmlContent);
fclose($newPage);
?>

