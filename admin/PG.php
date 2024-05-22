<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="cmas mark entry ug">
    <title>CMAS-PG</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="PG.css">
    <style>
       
    </style>
</head>

    <body>
        <div class="sidebar  ">
            <div class="logo-details"><i class='bx bxs-school'></i>
                <span class="logo_name">CMAS</span>
            </div>
            
            <ul class="nav-link">
                <li> <div class="profile-details">
                    <div class="profile-content"><img src="DefaultProfile.png" alt="profile"></div>
                    <div class="name-job">
                        <div class="profile_name"><?php echo "Admin "?></div>
                        <div class="job">Admin</div>
                    </div>
                    <i class='bx bx-log-out-circle'></i>
                </div></li>
                <li> <a href="index.php"> <i class='bx bxs-grid-alt'></i><span class="link_name">Dashboard</span></a></li>
    
                <li>
                    <div class="icon-link"> <a href=""> <i class='bx bxs-book-reader' ></i></i><span
                                class="link_name">Courses</span></a><i class='bx bxs-chevron-down arrow'></i></div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="">category</a></li>
                        <li><a href="UG.php">UG</a></li>
                        <li><a href="PG.php">PG</a></li>
    
                    </ul>
                </li>
                <!-- <li>
                    <div class="icon-link"> <a href=""> <i class='bx bxs-graduation '></i><span
                                class="link_name">Student</span></a><i class='bx bxs-chevron-down arrow'></i></div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="">category</a></li>
                        <li><a href="#">Add</a></li>
                        <li><a href="#">View</a></li>
    
                    </ul>
                </li> -->
    
                <li>
                    <div class="icon-link"> <a href=""> <i class='bx bxs-message-alt-check' ></i><span
                                class="link_name">Mark Entryt</span></a><i class='bx bxs-chevron-down arrow'></i></div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="AuthBeforeMarkEntry.php">category</a></li>
                        <li><a href="insert.php">UG</a></li>
                        <li><a href="insert2.php">View</a></li>
    
                    </ul>
                </li>
    
               
            </ul>
        </div>
        <div class="main">
            <div class="streams">
           <div class="box-container">
            <div class="boxes">
                <ul>
                 <h1><u>Arts</u></h1>
                 <li>Economics</li>
                 <li>Education</li>
                 <li>English</li>
                 <li>History</li>
                 <li>Odia</li>
                 <li>Poltical Science</li>
                 <li>Psychology</li>
                </ul>
                <ul>
                 <h1><u>Science</u></h1>
                 <li>Physics</li>
                 <li>Chemistry</li>
                 <li>Mathematics</li>
                 <li>Botany</li>
                 <li>Zoology</li>
                 <li>Computer Science</li>
                </ul>
                <ul>
                 <h1><u>Commerce</u></h1>
                 <li>Commerce</li>
                 
                </ul>
                <br>
                <br><br>
               
             </div>    
             <div class="boxbutton">
                <button onclick="window.location.href='index.php'">Back</a></button>
             </div>
           </div>
              
            
            </div>
        </div>
        <script>
           function newWin()
           {
            window.open("index.php");
           }

            let arrow=document.querySelectorAll(".arrow");
           
            for(var i=0;i<arrow.length;i++)
            {
                arrow[i].addEventListener("click", (e)=>{
                  console.log(e)
                  let arrowParent=e.target.parentElement.parentElement;
                  console.log(arrowParent)
                  arrowParent.classList.toggle("ShowMenu")
                }
                );
            }
        </script>
    </body>

</html>