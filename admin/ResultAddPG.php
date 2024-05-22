<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMAS-InsertResultsPG</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <link rel="icon" type="image/x-icon" href="favicon.png">
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="ResultAdd.css">
<script src="script.js"></script>

</head>

<body>


    <div class="sidebar  ">
        <div class="logo-details"><i class='bx bxs-school'></i>
            <span class="logo_name">CMAS</span>
        </div>

        <ul class="nav-link">
            <li>
                <div class="profile-details">
                    <div class="profile-content"><img src="DefaultProfile.png" alt="profile"></div>
                    <div class="name-job">
                        <div class="profile_name">Admin Name</div>
                        <div class="job">Admin</div>
                    </div>
                    <i class='bx bx-log-out-circle'></i>
                </div>
            </li>
            <li> <a href="index.php"> <i class='bx bxs-grid-alt'></i><span class="link_name">Dashboard</span></a></li>

            <li>
                <div class="icon-link"> <a href=""> <i class='bx bxs-book-reader'></i></i><span class="link_name">Courses</span></a><i class='bx bxs-chevron-down arrow'></i></div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="">category</a></li>
                    <li><a href="UG.php">UG</a></li>
                    <li><a href="PG.php">PG</a></li>

                </ul>
            </li>
            <!-- <li>
                    <div class="icon-link"> <a href=""> <i class='bx bxs-graduation '></i><span class="link_name">Student</span></a><i class='bx bxs-chevron-down arrow'></i></div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="">category</a></li>
                        <li><a href="#">Add</a></li>
                        <li><a href="#">View</a></li>

                    </ul>
                </li> -->

            <li>
                <div class="icon-link"> <a href=""> <i class='bx bxs-message-alt-check'></i><span class="link_name">Mark insert</span></a><i class='bx bxs-chevron-down arrow'></i></div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="">Mark Entry</a></li>
                    <li><a href="insert.php">UG</a></li>
                    <li><a href="insert2.php">PG</a></li>

                </ul>
            </li>


        </ul>
    </div>
    <div class="main">
        <div class="Form-Container">
            <div class="Form-main">
                <form action="SubmitResultPG.php" method="post" style="font-weight:bold">

                  
                    <?php
                    $TYPE = $_GET['type'];
                    $subject = $_GET['subject'];
                    $paper = trim($_GET['paper']);
                    $sem=$_GET['sem'];

                    include("Connection.php");
                    $query = "select * from pm1dtdb2 where   SUB='$paper'";
                    $result = $con->query($query);
                    ?>
                    <table border="0" cellspacing="5px">
                        <caption><?php
                       
                                    echo $sem.' Sem |'.$subject . "|" . $paper;

                                    ?></caption>
                        <?php
                        if ($TYPE == "midSem") {
                            echo "<tr><td>Sl. No.</td><td>ROLLNO</td><td> MID-SEM </td>  </tr>";

                            $i = 1;
                            $sl=1;

                            while ($row = $result->fetch_assoc()) {
                                // echo '<tr><td>' . $row['ROLLNO'] . '</td>';


                                if ($row['STATUS_MID'] == 1) {
                                    echo '<tr><td>'.$sl.'</td><td><input type="text"  name="RollNo" value="' . $row['ROLLNO'] . '" required="required" readonly> </td>';
                                    echo '<td><input type="text"   name="MID" value="' . $row['CMRK'] . '"  required="required" readonly></td></tr>';
                                } else {
                                    echo '<tr><td>'.$sl.'</td><td><input type="text"  name="RollNo' . $i . '" value="' . $row['ROLLNO'] . '" required="required" readonly> </td>';
                                    echo '<td><input type="text"   name="MID' . $i . '" value="' . $row['CMRK'] . '" onkeydown="handleKeyDown(event,\'text'.$i.'\',\'check'.$i.'\')" onkeyup="handleKeyUp(event,\'text'.$i.'\',\'check'.$i.'\')"  id="text' . $i . '"> </td>';
                                    echo '<td><input type="checkbox" name="checkMid' . $i . '" id="check' . $i . '" value="0" onclick="checking(\'check'.$i.'\')" ></td></tr>';
                                    $i++;
                                }
                                $sl++;
                            }
                        }
                        if ($TYPE == "endSem") {
                            echo "<tr><td>Sl. No.</td><td>CODE</td><td> END-SEM </td></tr>";

                            $i = 1;
                            $sl=1;

                            while ($row = $result->fetch_assoc()) {
                                // echo '<tr><td>Sl. No.</td><td>' . $row['ROLLNO'] . '</td>';


                                if ($row['STATUS_END'] == 1) {
                                    echo '<tr><td>'.$sl.'</td><td><input type="text"  name="Code" value=' . $row['CODE'] . ' required="required" readonly> </td>';
                                    echo '<td><input type="text"  name="END" value=' . $row['EMRK'] . '  required="required" readonly> </td></tr>';
                                } else {
                                    echo '<tr><td>'.$sl.'</td><td><input type="text"  name="Code' . $i . '" value=' . $row['CODE'] . ' required="required" readonly> </td>';
                                    echo '<td><input type="text"  name="END' . $i . '" value="' . $row['EMRK'] . '"  onkeydown="handleKeyDown(event,\'text'.$i.'\',\'check'.$i.'\')" onkeyup="handleKeyUp(event,\'text'.$i.'\',\'check'.$i.'\')"    id="text' . $i . '"> </td>';
                                    echo '<td><input type="checkbox" name="checkEnd' . $i . '" id="check' . $i . '" value="0" onclick="checking(\'check'.$i.'\')" ></td></tr>';
                                    $i++;
                                }
                            }
                        }
                        if ($TYPE == "pract") {
                            echo "<tr><td>Sl. No.</td><td>ROLLNO</td><td> PRACTICAL </td></tr>";

                            $i = 1;
                            $sl=1;

                            while ($row = $result->fetch_assoc()) {
                                // echo '<tr><td>' . $row['ROLLNO'] . '</td>';
                                // echo '<td><input type="text" min="0" max="100" name="PRACT' . $i . '" value='.$row['PRACTICAL'].'  required="required"> </td></tr>';
                                if ($row['STATUS_PRACTICAL'] == 1) {
                                    echo '<tr><td>'.$sl.'</td><td><input type="text"  name="RollNo" value=' . $row['ROLLNO'] . ' required="required" readonly > </td>';
                                    echo '<td><input type="text"  name="PRACT" value=' . $row['PRMRK'] . '  required="required" readonly> </td></tr>';
                                } else {
                                    echo '<tr><td>'.$sl.'</td><td><input type="text"  name="RollNo' . $i . '" value=' . $row['ROLLNO'] . ' required="required" readonly > </td>';
                                    echo '<td><input type="text"  name="PRACT' . $i . '" value="' . $row['PRMRK'] . '" onkeydown="handleKeyDown(event,\'text'.$i.'\',\'check'.$i.'\')" onkeyup="handleKeyUp(event,\'text'.$i.'\',\'check'.$i.'\')"    id="text' . $i .'"> </td>';
                                    echo '<td><input type="checkbox" name="checkPract' . $i . '" id="check' . $i . '" value="0" onclick="checking(\'check'.$i.'\')"> </td></tr>';
                                    $i++;
                                }
                            }
                        }
                        ?>
                    </table>
                    <input type="text" name="semester" id="" value="<?php echo $sem; ?> " style="display:none;">
                    <input type="text" name="subject" id="" value="<?php echo $subject; ?> " style="display:none;">
                    <input type="text" name="TYPE" id="" value="<?php echo $TYPE; ?>" style="display:none;">
                    <input type="text" name="paper" id="" value="<?php echo $paper; ?>" style="display: none;">
                    <input type="number" value="<?php echo $i; ?>" name="counter" readonly style="display:none;" id="counter"><br><br>
                    <input type="submit" class="sub-btn" value="Save Draft" name="SubmitType"><br>
                    <input type="submit" class="sub-btn" value="Submit" name="SubmitType"><br>
                    <input type="reset" class="sub-btn"><br>
                    <input type="button" value="back" onclick="window.location.href='insert2.php'" class="sub-btn">
                </form>

            </div>
        </div>
    </div>


</body>



<script>
    let arrow = document.querySelectorAll(".arrow");

    for (let i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement;
            arrowParent.classList.toggle("ShowMenu")
        });
    }

    let count = document.getElementById('counter').value;


    let formContainer = document.querySelector('.Form-Container');
    formContainer.addEventListener('click', (event) => {
        let target = event.target;

        for (let i = 1; i < count; i++) {
            let textid = "text" + i;
            let checkid = "check" + i;

            if (target.id === textid) {
                let checkbx = document.getElementById(checkid);
                checkbx.checked = true;

                if (checkbx.checked) {
                    loading();
                    console.log(checkbx.value)
                } else {
                    loading2();
                    console.log(checkbx.value)
                }
            }

            if (target.id === checkid) {
                let checkbx = document.getElementById(checkid);

                if (checkbx.checked) {
                    loading();
                } else {
                    loading2();
                }
            }
           

            function loading() {
                document.getElementById(checkid).value = "1";
            }

            function loading2() {
                document.getElementById(checkid).value = "0";
            }
        }
    });
//     function checking(checkId) {
//     checkId1 = String(checkId);
//     var temp = document.getElementById(checkId1);

   
//     temp.checked = !temp.checked;

    
//     temp.value = temp.checked ? "1" : "0";
// }




</script>




</html>