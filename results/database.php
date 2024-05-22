<?php
try{
    $sererName='localhost';
    $serverUserName='u772092216_BetaTesting';
    $serevrUserPassword='BetaTesting@123';
    $dataBaseName='u772092216_BetaTesting';
    $con=new mysqli($sererName,$serverUserName,$serevrUserPassword,$dataBaseName);
    if(!$con)
    {
die("error while establish connection between db and db driver...");
    }
   
}catch(Exception $e)
{
    echo "error".$e;
}
?>