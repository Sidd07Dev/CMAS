<?php
include("database.php");
if($con){
   
    $query="select * from ug_marksheet where ROLLNO='UGS22CHE440'  ";
    $result=$con->query($query);
    $i=1;
    if($result){
        while($row=$result->fetch_assoc()){
            echo $i.' ';
            echo $row['ROLLNO'];
            
            if(unlink($row['QrPath'])){
                 $query1="Update ug_marksheet SET REGDNO='CO1-0904/2022',QrPath='0' where ROLLNO='UGS22CHE440'  "; 
                 $res=$con->query($query1);
                 if($res){
                     echo 'done';
                     
                 }else{
                       echo ' not done';
                 }
            }else {
                echo 'nope';
            }
            echo '<br>';
            $i++;
          }
           
        }
    
}
?>
