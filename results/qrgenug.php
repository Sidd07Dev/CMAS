<?php
// Include the qrlib file 

try{
    include 'phpqrcode/qrlib.php'; 


require('database.php');
$query="select * from ug_marksheet where QrPath='0' ";
$result=$con->query($query);
if($result==true)
{ 
    while($row=$result->fetch_assoc()){ 

$roll=$row['ROLLNO'];
$sem=$row['SEM'];
$regd=$row['REGDNO'];
$id=rand(1,50);
$path='QrCodes/';
$qrcode=$path.'UG'.$sem.$roll.'.png';
$text="https://results.cmas.co.in/UGresult.php?rn=".$roll."&rg=".$regd."&sem=".$sem;

QRcode::png($text,$qrcode,'H',4,4);
echo "<img src='".$qrcode."'>";
$query1="UPDATE ug_marksheet SET QrPath='$qrcode' where ROLLNO='$roll' AND SEM='$sem' ";
$result1=$con->query($query1);
if($result1==true)
{
    echo "inserted..";
}
else
{
    echo "inserted.. not";
}
}
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
}catch(Exception $e)
{
    echo $e;
}

?> 