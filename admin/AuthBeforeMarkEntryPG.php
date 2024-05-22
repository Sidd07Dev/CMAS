<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMAS-Authentication</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <link rel="icon" type="image/x-icon" href="favicon.png">
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="AuthBeforeMarkEntry.css">
     <?php
        $SUB = $_POST["country"];
       
        $PAPER = $_POST["state"];
        $SEM=$_POST["sem"];
        
 $TYPE=$_POST['type'];
        ?>
    <style>

    </style>
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
                <div class="icon-link"> <a href=""> <i class='bx bxs-message-alt-check'></i><span class="link_name">Mark Entry</span></a><i class='bx bxs-chevron-down arrow'></i></div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="">category</a></li>
                    <li><a href="insert.php">UG</a></li>
                    <li><a href="#">PG</a></li>

                </ul>
            </li>


        </ul>
    </div>
    <div class="main">
        <div class="Form-Container">
            <div class="Form-main">
                 <form action="AuthBeforeMarkEntryPG1.php" method="post">
                    <?php
                    //  echo '<u> <label for="">' . $SUB . '</label></u><br>';
                    //  echo ' <label for="">' . $TYPE . '</label><br>';
                    //  echo ' <label for="">' . $PAPER . '</label><br>';
                    ?>
                     <input type="text" name="SEM" value="<?php echo $SEM; ?>" style="display:none">
                    <input type="text" name="TYPE" value="<?php echo $TYPE; ?>" style="display:none">
                    <input type="text" name="SUB" value="<?php echo $SUB; ?>" style="display:none">
                    <input type="text" name="PAPER" value="<?php echo $PAPER; ?>" style="display:none">
                    <label for=""> <b>Enter UID:-</b></label><br>
                    <input type="text" name="UID"  required="required" autocomplete="user-name"><br>
                    <label for=""><b>Enter Password:-</b></label><br>
                    <input type="password" name="PASS"  required="required" autocomplete="current-password">
                    <br><br>
                    <input type="submit"  class="submit-btn">
                    <input type="button" value="back" onclick="window.location.href='insert2.php'" class="submit-btn">


                </form>
            </div>

</div>
</div>
<script>
    let arrow = document.querySelectorAll(".arrow");

    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            console.log(e)
            let arrowParent = e.target.parentElement.parentElement;
            console.log(arrowParent)
            arrowParent.classList.toggle("ShowMenu")
        });
    }
</script>
</body>