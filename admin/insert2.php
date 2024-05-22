<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="keywords" content="cmas mark entry,cmas result adding ">
      <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>CMAS-Add-Result-PG</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="insert.css">
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
                    <li><a href="insert2.php">PG</a></li>

                </ul>
            </li>


        </ul>
    </div>
    <div class="main">
        <div class="Form-Container">
            <div class="Form-main">
                <form action="AuthBeforeMarkEntryPG.php" method="post">


                    <div class="col-md-4">
                        <h3>Mark Insert For PG Only</h3>

                    </div>
                    <div class="col-md-4">
                        <label for="sem">Semester:-</label>
                        <select name="sem" id="sem" class="form-control">

                        </select>
                    </div>

                    <div class="col-md-4">

                        <label for="country">Subject:-</label>
                        <select type="text" name="country" id="country" class="form-control">
                             <option>Select Stream</option> 
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="state">Paper:-</label>
                        <select type="text" id="state" name="state" class="form-control">
                            <option value="">Select Paper</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="state">Type:-</label>
                        <select type="text" id="type" name="type" class="form-control">

                            <option value="midSem">Mid Sem</option>
                            <option value="pract">Practical</option>
                            <option value="endSem">End Sem</option>
                        </select>
                    </div>


                  
                    <input type="submit" value="Submit" id="submit-btn">
                    <input type="button" value="back" onclick="window.location.href='index.php'" id="submit-btn">
                </form>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   
       <script type="text/javascript">
        $(document).ready(function() {
            loadSemesters();
            $('#sem').change(function() {
                var semId = $(this).val();
              
                loadCountry(semId);
                var countryId = $('#country').val();
                loadState(countryId, semId);
            });

            $('#country').change(function() {
                var countryId = $(this).val();
                var semId = $('#sem').val();
                loadState(countryId, semId);
            });
        });

        // function loadCountry(semId) {
        //     $("#country").empty();
        //     $.ajax({
        //         type: "POST",
        //         url: "ajax.php",
        //         data: "get=country&semId=" + semId
        //     }).done(function(result) {
        //         $("#country").html(result);
//         //     });
//         // }
//         function loadCountry(semId) {
//             alert(semId);
//     $("#country").empty();
//     $.ajax({
//         type: "POST",
//         url: "ajax.php",
//         data: {
//             get: "country",
//             semId: semId
//         }
//     }).done(function(result) {
//         $("#country").html(result);
//     });
// }
function loadCountry(semId) {
    console.log("Semester ID:", semId); // Debugging message
    $("#country").empty();
    $.ajax({
        type: "POST",
        url: "ajax2.php",
        data: {
            get: "country",
            semId: semId
        }
    }).done(function(result) {
        console.log("Country data received:", result); // Debugging message
        $("#country").html(result);
    }).fail(function(jqXHR, textStatus, errorThrown) {
        // console.error("AJAX Error:", textStatus, errorThrown); // Debugging message for AJAX errors
    });
}



        function loadSemesters() {
            $.ajax({
                type: "POST",
                url: "ajax2.php",
                data: "get=semesters"
            }).done(function(result) {
                $("#sem").html(result);
            });
        }

        function loadState(countryId, semId) {
            $("#state").empty();
            $.ajax({
                type: "POST",
                url: "ajax2.php",
                data: "get=state&countryId=" + countryId + "&semId=" + semId
            }).done(function(result) {
                $("#state").html(result);
            });
        }
    </script>
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

</html>