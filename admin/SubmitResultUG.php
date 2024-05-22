<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>CMAS- MarkSubmission</title>
</head>

<body>
    <?php
    include('Connection.php');
    echo "if all record inserted then refresh the page";
    $i = 1;
    $type = trim($_POST['TYPE']);
    $sem = trim($_POST['semester']);
    $subType = $_POST['SubmitType'];
    // var_dump($type);
    // var_dump('endSem');
    $counter = $_POST['counter'];
    $paper = $_POST['paper'];
    // echo "$type";
    $practical;
    $Code;
    $con=new mysqli('localhost', 'u772092216_cmas', 'Csedpk@1234', 'u772092216_CMASDB');

    if ($subType == 'Save Draft') {
        if ($type == 'midSem') {
            // echo "midblock";
            $RollNo;
            $midSem;
            $endSem;
            $checkMid;

            $i = 1;
            while ($i < $counter) {
                $roll = "RollNo" . $i;
                $RollNo = $_POST[$roll];
                // echo "<br>".$RollNo.'<br>';
                $mid = "MID" . $i;
                $midSem = $_POST[$mid];
                // echo $midSem."<br>";
                $pract = "PRACT" . $i;
                $practical = $_POST[$pract];

                if (!$con) {
                    die('error..');
                } else {
                    $query = "update pm1dtdb1 set CMRK='$midSem' where ROLLNO='$RollNo' and SUB='$paper'";
                    // $query="update pm1dtdb set MID_SEM='$midSem',PRACTICAL='$practical',END_SEM='$endSem' where ROLLNO='$RollNo' and SUB='$paper'";
                    $result = $con->query($query);
                    if ($result == true) {

                        echo "<br>done for" . $RollNo;
                    } else {
                        echo "error";
                    }
                }
                $i++;
            }
        } else if ($type == 'endSem') {
            $j = 1;
            while ($j < $counter) {
                $code = "Code" . $j;
                $Code = $_POST[$code];

                $end = "END" . $j;
                // echo $end."<br>";
                $endSem = $_POST[$end];
                // echo $endSem."<br>";
                if (!$con) {
                    die('error..');
                } else {
                    // $query="update pm1dtdb set MID_SEM='$midSem',PRACTICAL='$practical' where ROLLNO='$RollNo' and SUB='$paper'";
                    $query1 = "update pm1dtdb1 set EMRK='$endSem' where CODE='$Code' and SUB='$paper'";
                    $result1 = $con->query($query1);
                    if ($result1 == true) {

                        echo "<br>done for" . $Code;
                    } else {
                        echo "error";
                    }
                }
                $j++;
            }
        } else if ($type == 'pract') {
            // echo "midblock";
            $RollNo;
            $midSem;

            $i = 1;
            while ($i < $counter) {
                $roll = "RollNo" . $i;
                $RollNo = $_POST[$roll];


                $pract = "PRACT" . $i;
                $practical = $_POST[$pract];


                if (!$con) {
                    die('error..');
                } else {
                    $query = "update pm1dtdb1 set PRMRK='$practical' where ROLLNO='$RollNo' and SUB='$paper'";
                    // $query="update pm1dtdb set MID_SEM='$midSem',PRACTICAL='$practical',END_SEM='$endSem' where ROLLNO='$RollNo' and SUB='$paper'";
                    $result = $con->query($query);
                    if ($result == true) {

                        echo "<br>done for" . $RollNo;
                    } else {
                        echo "error";
                    }
                }
                $i++;
            }
        } else {
            echo "Something went wrong";
        }
    }



    if ($subType == 'Submit') {
        if ($type == 'midSem') {
            // echo "midblock";
            $RollNo;
            $midSem;
            $endSem;
            $checkMid;

            $i = 1;
            while ($i < $counter) {
                $roll = "RollNo" . $i;
                $RollNo = $_POST[$roll];
                // echo "<br>".$RollNo.'<br>';
                $mid = "MID" . $i;
                $midSem = $_POST[$mid];
                // echo $midSem."<br>";
                // $pract = "PRACT".$i;
                // $practical = $_POST[$pract];
                $check = "checkMid" . $i;
                $checkMid = $_POST[$check];
                if (!$con) {
                    die('error..');
                } else {
                    $query = "update pm1dtdb1 set CMRK='$midSem',STATUS_MID='$checkMid' where ROLLNO='$RollNo' and SUB='$paper'";
                    // $query="update pm1dtdb set MID_SEM='$midSem',PRACTICAL='$practical',END_SEM='$endSem' where ROLLNO='$RollNo' and SUB='$paper'";
                    $result = $con->query($query);
                    if ($result == true) {

                        echo "<br>done for" . $RollNo;
                    } else {
                        echo "error";
                    }
                }
                $i++;
            }
        } else if ($type == 'endSem') {
            $j = 1;
            while ($j < $counter) {
                $code = "Code" . $j;
                $Code = $_POST[$code];
                $check = "checkEnd" . $i;
                $checkEnd = $_POST[$check];
                $end = "END" . $j;
                // echo $end."<br>";
                $endSem = $_POST[$end];
                // echo $endSem."<br>";
                if (!$con) {
                    die('error..');
                } else {
                    // $query="update pm1dtdb set MID_SEM='$midSem',PRACTICAL='$practical' where ROLLNO='$RollNo' and SUB='$paper'";
                    $query1 = "update pm1dtdb1 set EMRK='$endSem',STATUS_END='$checkEnd' where CODE='$Code' and SUB='$paper'";
                    $result1 = $con->query($query1);
                    if ($result1 == true) {

                        echo "<br>done for" . $Code;
                    } else {
                        echo "error";
                    }
                }
                $j++;
            }
        } else if ($type == 'pract') {
            // echo "midblock";
            $RollNo;
            $checkPract;

            $i = 1;
            while ($i < $counter) {
                $roll = "RollNo" . $i;
                $RollNo = $_POST[$roll];


                $pract = "PRACT" . $i;
                $practical = $_POST[$pract];
                $check = "checkPract" . $i;
                $checkPract = $_POST[$check];

                if (!$con) {
                    die('error..');
                } else {
                    $query = "update pm1dtdb1 set PRMRK='$practical',STATUS_PRACTICAL='$checkPract' where ROLLNO='$RollNo' and SUB='$paper'";
                    // $query="update pm1dtdb set MID_SEM='$midSem',PRACTICAL='$practical',END_SEM='$endSem' where ROLLNO='$RollNo' and SUB='$paper'";
                    $result = $con->query($query);
                    if ($result == true) {

                        echo "<br>done for" . $RollNo;
                    } else {
                        echo "error";
                    }
                }
                $i++;
            }
        } else {
            echo "Something went wrong";
        }
    }

    echo "<br>Result inserted.. Congrats...";
    echo "<br> click below link to go previus page<br>";
    echo '<a href="insert.php">click here</a>';
    ?>
</body>

</html>