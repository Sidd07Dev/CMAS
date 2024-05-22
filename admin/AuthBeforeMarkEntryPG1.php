<?php
    include("Connection.php");
    $UID = $_POST['UID'];
    $PASSWORD = $_POST['PASS'];
    $SUBJECT = $_POST['SUB'];
    $SUBJECT=trim($SUBJECT);
    $PAPER = $_POST['PAPER'];
    $PAPER=trim($PAPER);
    $TYPE = $_POST['TYPE'];
    $SEM=trim($_POST['SEM']);
    // echo $PAPER;
    // var_dump($PAPER);
    // echo $UID;
    // echo $PASSWORD;
    // var_dump($UID);
    // var_dump($SUBJECT);



    try {

        // $con=new mysqli('localhost', 'u772092216_cmas', 'Csedpk@1234', 'u772092216_CMASDB');
        if (!$con) {
            die("error");
        } else {

            if ($TYPE == 'midSem') {

                $query = "Select * from ADMIN ";

                $result = $con->query($query);
                if ($result->num_rows <= 0) {
                    echo "DB blank";
                } else {
                    $flag = 0;

                    while ($row = $result->fetch_assoc()) {
                        echo  $row['UID'];
                        var_dump($row['UID']);
                        echo "<br>" . $row['PASSWORD'];
                        echo "<br>" . $row['SUBJECT'];                      
                        echo "<br>";

                        if ($UID == $row['UID'] && $PASSWORD == $row['PASSWORD'] && $row['SUBJECT'] == $SUBJECT) {
                            echo "<br><br>" . $row['UID'];
                            echo "<br> $SUBJECT";
                            echo "<br> $PAPER";
                            // header('location:ResultAddUG.php?subject=' . $SUBJECT . '&paper=' . $PAPER . '&type=' . $TYPE);
                            $flag = 1;

                            break;
                            // header('location:index1.php');
                        }
                        // } else {
                        //     header('location:AuthBeforeMarkEntry.php');


                        // }
                    }
                    if ($flag == 0) {
                        echo "error";
                        header('location:AuthBeforeMarkEntry.php');
                    } else if ($flag == 1) {
                         $PAPER=urlencode($PAPER);
                        header('location:ResultAddPG.php?subject=' . $SUBJECT . '&paper=' . $PAPER . '&type=' . $TYPE.'&sem='.$SEM);
                    }
                }
            } else if ($TYPE == 'endSem') {

                $query = "Select * from ADMIN ";

                $result = $con->query($query);
                if ($result == false) {
                    echo "DB blank";
                } else {
                    while ($row = $result->fetch_assoc()) {
                        if ($UID == $row['UID'] && $PASSWORD == $row['PASSWORD'] && $row['SUBJECT'] == 'ALL') {
                            echo "HELLO USER =" . $row['UID'];
                            echo "<br> $SUBJECT";
                            echo "<br> $PAPER";
                             $PAPER=urlencode($PAPER);
                            header('location:ResultAddPG.php?subject=' . $SUBJECT . '&paper=' . $PAPER . '&type=' . $TYPE.'&sem='.$SEM);
                            break;
                        } else {
                            header('location:insert.php');
                         
                        }
                    }
                }
            }
        }
        if ($TYPE == 'pract') {

            $query = "Select * from ADMIN ";

            $result = $con->query($query);
            if ($result == false) {
                echo "DB blank";
            } else {
                while ($row = $result->fetch_assoc()) {
                    if ($UID == $row['UID'] && $PASSWORD == $row['PASSWORD'] && $row['SUBJECT'] == $SUBJECT) {
                        echo "HELLO USER =" . $row['UID'];
                        echo "<br> $SUBJECT";
                        echo "<br> $PAPER";
                         $PAPER=urlencode($PAPER);
                        header('location:ResultAddPG.php?subject=' . $SUBJECT . '&paper=' . $PAPER . '&type=' . $TYPE.'&sem='.$SEM);
                        break;
                        // header('location:index1.php');
                    } else {
                        header('location:insert.php');
                    }
                }
            }
        }
    } catch (Exception $e) {
        echo "$e";
    } ?>
