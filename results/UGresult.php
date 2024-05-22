<?php
ob_start();
session_start();
//require_once('includes/functions.php');
require_once('database.php');

// ------------code for error message--------------------
if("") {
  ini_set("display_errors", "1");
  error_reporting(E_ALL & ~E_NOTICE);
} else {
  error_reporting(0);
}

?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>UG Mark Sheet</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
    }

    /* .container {
      max-width: 900px;
      height: 90vh; 
      margin: auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    } */
    .container {
  max-width: 900px;
  max-height: 700px;
  margin: auto; /* This will center the container horizontally */
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 1);
  /* Add other styles as needed */
  margin-top: 4rem;
  border-radius: 5px;
}


    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    /* .logo {
      width: 260px;
      height: 100px;
      margin-bottom: 10px;
    } */

    .bar {
      height: 5px;
      width: 10px;
      background-color: red;
      border-radius: 10px;
      margin: 10px auto;
    }

    .qr-code {
      display: block;
      margin: 0 auto;
      width: 90px;
      height: 90px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    /* th, td {
      padding: 10px;
      text-align: left;
    } */

    th {
      background-color: #8576ee;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
      text-align: center;
     
    }
    td{
        text-align: center;
       
    }

    .btn {
      background-color: transparent;
      color: black;
      /* border: 1px solid #333; */
      padding: 10px 20px;
      text-decoration: none;
      display: inline-block;
      margin-right: 10px;
    }

    .btn:hover {
     background-color: red;
      color: #f0f0f0;
      border-radius: 20px;
    }
    button{
        border: none;
    }
    li{
      font-size: 10px;
    }

    @media screen and (max-width: 600px) {
      .logo {
        width: 100px;
      }

      .qr-code {
        width: 80px;
        height: 80px;
      }
      .container {
  
    margin-top: 30rem;

}
    }
  </style>
</head>

<body>
  <div class="container">
    
    <?php
    try{ 
    $roll = trim($_GET['rn']);
    $reg = $_GET['rg'];
   $reg=trim($reg);
    $SEM=trim($_GET['sem']);

    $sql = "select * from ug_marksheet where rollno='$roll' and regdno='$reg' and sem='$SEM' ";
    $result = $con->query($sql);

    if ($res = $result->fetch_array()) {
      extract($res);
    }}catch(Exception $e)
    {
      echo $e;
    }
    ?>
<table>
       
       <td><img src="LOGO.jpeg" class="logo" /></td>
       <!-- <td><div class="bar"></div></td> -->
     <td>  <img class="qr-code" src="<?php echo $QrPath; ?>" alt=""></td>
     </table>
 
    <table border="2" cellspacing="0" cellpadding="3">
      <tr>
        <th colspan="9">EXAMINATION OF +3 CBCS <?php echo $SEM; ?> SEMESTER <?php echo $STRM; ?> (<?php echo $R_B; ?>) EXAMINATION,2023</th>
      </tr>
      <tr>
        <td colspan="9">ROLL NO : <?php echo $ROLLNO; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REGD NO. : <?php echo $REGDNO; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME OF THE CANDIDATE : <?php echo $SNAME; ?></td>
      </tr>
      <tr>
        <th>SUBJECT/PAPER</th>
        <th>ES<br>80/60</th>
        <th>MS<br>20/15</th>
        <th>PR<br>25</th>
        <th>TOTAL<br>100</th>
        <th>CREDIT<br>CR</th>
        <th>LETTER<br>GRADE</th>
        <th>GRADE POINT(GP)</th>
        <th>CREDIT POINT(CP)</th>
      </tr>
      <tr>
      <td><?php echo $SB1; ?></td>
      <td><?php echo $UM1;echo $F1; ?></td>
      <td><?php echo $CM1; ?></td>
      <td><?php echo $PR1; ?></td>
      <td><?php echo $T1; ?></td>
      <td><?php echo $CR1; ?></td>
      <td><?php echo $CG1; ?></td>
      <td><?php echo $CP1; ?></td>
      <td><?php echo $CT1; ?></td>
    </tr>
    <tr>
      <td><?php echo $SB2; ?></td>
      <td><?php echo $UM2;echo $F2;?></td>
      <td><?php echo $CM2; ?></td>
      <td><?php echo $PR2; ?></td>
      <td><?php echo $T2; ?></td>
      <td><?php echo $CR2; ?></td>
      <td><?php echo $CG2; ?></td>
      <td><?php echo $CP2; ?></td>
      <td><?php echo $CT2; ?></td>
    </tr>
    <tr>
      <td><?php echo $SB3; ?></td>
      <td><?php echo $UM3;echo $F3;?></td>
      <td><?php echo $CM3; ?></td>
      <td><?php echo $PR3; ?></td>
      <td><?php echo $T3; ?></td>
      <td><?php echo $CR3; ?></td>
      <td><?php echo $CG3; ?></td>
      <td><?php echo $CP3; ?></td>
      <td><?php echo $CT3; ?></td>
    </tr>
    <tr>
      <td><?php echo $SB4; ?></td>
      <td><?php echo $UM4;echo $F4;?></td>
      <td><?php echo $CM4; ?></td>
      <td><?php echo $PR4; ?></td>
      <td><?php echo $T4; ?></td>
      <td><?php echo $CR4; ?></td>
      <td><?php echo $CG4; ?></td>
      <td><?php echo $CP4; ?></td>
      <td><?php echo $CT4; ?></td>
    </tr>
    <?php if($SB5!='')
    {
    ?>
    <tr>
      <td><?php echo $SB5; ?></td>
      <td><?php echo $UM5;echo $F5;?></td>
      <td><?php echo $CM5; ?></td>
      <td><?php echo $PR5; ?></td>
      <td><?php echo $T5; ?></td>
      <td><?php echo $CR5; ?></td>
      <td><?php echo $CG5; ?></td>
      <td><?php echo $CP5; ?></td>
      <td><?php echo $CT5; ?></td>
    </tr>
 <?php }?>
   
    <tr>
      <td><?php echo $SB6;?></td>
     <td><?php echo $EV1; echo $F6; ?></td>
     <td></td>
     <td></td>
     <td><?php echo $EV1;?></td>
      <td><?php echo $CR6; ?></td>
     
       <td><?php echo $EG1; ?></td>
        <td><?php echo $EP1; ?></td>
        <td><?php echo $EP1; ?></td>
          
     
    </tr>
     
    </table>
    <table width="900" border="2" cellspacing="0" cellpadding="3" align="center" style="border:#333 2px groove;">
    <caption style="font-size:16px;border:#CCC 1px dashed; font-weight:bold;">RESULT SUMMARY</caption>
    <tr style="font-size:12px;border:#CCC 1px dashed; font-weight:bold;" align="center">
      <td width="146">TOTAL CREDIT</td>
      <td width="172">TOTAL CREDIT POINT</td>
      <td width="125">SGPA</td>
      <td width="185">MAX TOTAL MARKS</td>
      <td width="228">TOTAL OBTAINED MARKS</td>

    </tr>
    <tr style="font-size:12px;border:#CCC 1px dashed; font-weight:bold;" align="center">
      <td><?php echo $TOTCR; ?></td>
      <?php
   if($CT5!='')
   {
         $TCR2=number_format($CT1)+number_format($CT2)+number_format($CT3)+number_format($CT4)+number_format($EP1)+number_format($CT5);
   }else{
       $TCR2=number_format($CT1)+number_format($CT2)+number_format($CT3)+number_format($CT4)+number_format($EP1);
   }
      ?>
      <td><?php echo $TCR2; ?></td>
      <td><?php echo $SGPA; ?></td>
      <td><?php echo $MAXTOTMARK; ?></td>
      <td><?php echo $GTOT; ?></td>
    </tr>
  </table>

    <div class="buttons">
      <a href="ug.php" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
  <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
</svg>Home</a>
      <button class="btn" onclick="printPage()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1"/>
  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
</svg>Print</button>
<p style=" font-size: 9px;">This is system generated mark sheet so signature not required</p>
    <p align="right">Controller of Examinations </p>
    </div>

    <div class="disclaimer">
      <hr />
      <ul>
      <ins>Important:-</ins>
      <li style="font-weight:10px;"><?php echo $AB1; ?></li>
      <?php
      if($RESU!=''){
       echo ' <LI> '.$RESU.'</LI>';
      }
      ?>
      <li><?php echo $AB2; ?></li>
      <li><?php echo $AB3; ?></li>
      <li><?php echo $AB4; ?></li>
        <ins>Disclaimer:-</ins>
        <li>Shailabala Women's Autonomous College, Cuttack is not responsible for any inadvertent error that may have crept in the result being published on NET.</li>
        <li>The result published on net are for immediate information of students. These cannot be treated as original mark sheets.</li>
      </ul>
    </div>
  </div>
</body>
<script>
    function printmark()
    {
        document.getElementsByClassName("btn").style.color="white";
        window.print();
    }
    function printPage() {
  // Get all elements with the class name "btn" and hide them
  var buttons = document.getElementsByClassName("btn");
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].style.display = "none";
  }
  var headers = document.getElementsByTagName("th");
for (var i = 0; i < headers.length; i++) {
  headers[i].style.color = "black";
}



  // Print the page
  window.print();

  // After printing, restore the display property of the buttons
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].style.display = "";
  }
  var headers = document.getElementsByTagName("th");
for (var i = 0; i < headers.length; i++) {
  headers[i].style.color = "";
}
}

</script>
</html>
