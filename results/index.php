<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results College Mark Automation System</title>
    <link rel="icon" href="logo.jpeg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .navbar {
            box-shadow: 0 4px 6px -1px rgb(35 28 28 / 67%);
            background-color: #e9f2fb;
            /* Light blue background color */
        }

        /* Adjust carousel height and image size */
        .carousel-item img {

            max-height: 300px;
            object-fit: cover;
        }

        /* Add some gap from the navbar */
        .carousel-container {
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .carousel-item img {
                max-height: 120px;
            }
        }

        /* Preloader styles */
  .preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }
  
  .spinner {
    width: 50px;
    height: 50px;
    border: 5px solid #007bff;
    border-top: 5px solid #fff;
    border-radius: 50%;
    animation: spin 1s linear infinite;
  }
  
  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  /* Make the iframe responsive */
.map-responsive {
    overflow: hidden;
    padding-bottom: 56.25%; /* Aspect ratio (9:16 for 16:9) */
    position: relative;
    height: 0;
}

.map-responsive iframe {
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    position: absolute;
}
    </style>
</head>

<body>
    <!-- Preloader -->
<div class="preloader">
    <div class="spinner"></div>
  </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand" href="https://cmas.co.in/">
            <img src="logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
            CMAS
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="https://cmas.co.in/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://cmas.co.in/About.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://results.cmas.co.in/">Results</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="https://admin.cmas.co.in/">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Admin Login</button>
            </form>
        </div>
    </nav>


  

            
  
    
<div class="container">
      <center> <h1>Welcome to cmas.co.in</h1></center>
        <h2>Results for Postgraduate (PG) Courses:</h2>
           <li> Masters of Science (M.Sc.): View the results for various specializations such as Physics, Chemistry, Mathematics, etc. Check your individual marks, grades, and overall performance in each subject.</li>
            <li> Master of Arts (M.A.): Access the results for subjects like English Literature, History, Economics, etc. See your scores and compare them with the class average.</li>
                <li> Master of Commerce (M.Com.): Check your performance in subjects like Accounting, Finance, Marketing, etc. Get detailed insights into your academic progress.</li>
           <h2> Results for Undergraduate (UG) Courses:</h2>
            <li> Bachelor of Science (B.Sc.): Find out your scores in subjects like Biology, Chemistry, Computer Science, etc. View your semester-wise performance and overall grade point average.</li>
                <li>  Bachelor of Arts (B.A.): Access your marks for subjects like Sociology, Psychology, Political Science, etc. See how you've performed in each semester and track your academic journey.</li>
                    <li>  Bachelor of Commerce (B.Com.): Check your results for subjects like Business Studies, Financial Accounting, Taxation, etc. Analyze your performance and plan your next steps accordingly.</li>
<li>  Bachelor of Itm (Bsc Itm.): Check your results . Analyze your performance and plan your next steps accordingly.</li>
    </div>
  
    <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                   
                      <form id="rollNumberForm"  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                     
                        <div class="form-group">
                            <label for="regType">Select Course:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="regType" id="ugRadio" value="UG" checked>
                                <label class="form-check-label" for="ugRadio">UG</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="regType" id="pgRadio" value="PG">
                                <label class="form-check-label" for="pgRadio">PG</label>
                            </div>
                        </div>
                        <div class="form-group" id="semesterSection">
                            <!-- Semester options will be dynamically populated here -->
                        </div>
                        <div class="form-group">
                            <label for="rollNumber">Enter Roll Number:</label>
                            <input type="text" class="form-control" id="rollNumber" placeholder="Enter roll number" name="rollNumber">
                        </div>
                        <div class="form-group">
                            <label for="regNumber">Enter Reg. Number:</label>
                            <input type="text" class="form-control" id="regNumber" name="regNumber" placeholder="Enter reg. number">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

   
      <footer class="bg-dark text-light">
        <div class="container py-5">
          <div class="row">
            <div class="col-md-4">
              <h4>About Us</h4>
              <p>We are committed to providing innovative solutions to help you achieve your goals.</p>
            </div>
            <div class="col-md-4">
              <h4>Quick Links</h4>
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
           
              <div class="col-md-4">
                <h4>Location</h4>
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3737.711865844546!2d85.86107941108304!3d20.477024280958616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19120bdb03a2ef%3A0x12e8672e86b165ab!2sShailabala%20Women&#39;s%20College!5e0!3m2!1sen!2sin!4v1709288195342!5m2!1sen!2sin" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
            <div class="col-md-4">
              <h4>Contact Us</h4>
              <p>123 Main Street<br>City, State ZIP<br>Email: support@cmas.co.in<br>Phone: 123-456-7890</p>
            </div>
          </div>
          <hr>
          <div class="text-center">
            <p>&copy; 2024 CMAS. All rights reserved. <a href="https://sidhantapradhan.cmas.co.in">know developer?</a></p>
          </div>
        </div>
      </footer>
      <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   
      <script>
        // Set a timeout to hide the preloader after 10 seconds (10000 milliseconds)
        setTimeout(function() {
          document.querySelector('.preloader').style.display = 'none';
        }, 1000);
       </script>
      <script>
        $(document).ready(function() {
            // AJAX call to fetch semesters based on course selection
            $('input[name="regType"]').change(function() {
                var course = $(this).val();
               
                $.ajax({
                    url: 'fetch_semesters.php', // Replace with your PHP file to fetch semesters
                    method: 'POST',
                    data: { course: course },
                    success: function(response) {
                     
                        $('#semesterSection').html(response);
                    }
                });
            });
        
            // If UG is selected by default, fetch semesters for UG
            $('input[name="regType"][value="UG"]').trigger('change');
        });
        </script>
       






</body>
</html>

<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
include('database.php');
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // Initialize variables for error messages
    $nameErr = $emailErr = $regErr=$AllError="";
    $name = $email = "";
    $flag = 0;

    // Validate name
    if (empty($_POST["rollNumber"]) || empty($_POST["semester"]) || empty($_POST["regNumber"])) {
        $AllError = "All data required...Please provide all data that mention bellow";
       
    }

    // Validate semester
    if (empty($_POST["semester"])) {
        $emailErr = "Semester is required";
       
    }
    if (empty($_POST["rollNumber"])) {
        $nameErr = "RollNumber is required";
       
    }else
    {
         if($_POST['regType']=='UG'){
        $query="select * from ug_marksheet";
             
         }else
         {
            $query="select * from pg_marksheet"; 
         }
        $result=$con->query($query);
        while($row=$result->fetch_assoc())
        {
            if($row['ROLLNO']==trim($_POST['rollNumber']))
            {
                $flag=1;
                $regdno=$row['REGDNO'];
                break;
            }
        }
        if($flag==0)
        {
            $nameErr =$_POST['rollNumber']. " does  not exist"; 
        }
        
    }  if (empty($_POST["regNumber"])) {
        $regErr = "Reg.No. is required";
        
    }else{
        if($_POST["regNumber"]!=$regdno)
        {
            $regErr = "Reg.No. invalid ";
        }
    }
  
    // If there are errors, display pop-up notification
    if ($nameErr || $emailErr ||$AllError ||$regErr) {
        echo '<div class="modal" id="notificationModal" tabindex="-1" role="dialog">';
        echo '<div class="modal-dialog" role="document">';
        echo '<div class="modal-content">';
        echo '<div class="modal-header">';
        echo '<h5 class="modal-title">Notification</h5>';
        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
        echo '</div>';
        echo '<div class="modal-body">';
        echo '<p>';
        if($AllError)
        {
            echo $AllError;
        }
        echo '</p>';
        echo '<ul>';
        if ($nameErr) {
            echo '<li>' . $nameErr . '</li>';
        }
        if ($emailErr) {
            echo '<li>' . $emailErr . '</li>';
        }
        if ($regErr) {
            echo '<li>' . $regErr . '</li>';
        }
        echo '</ul>';
        echo '</div>';
        echo '<div class="modal-footer">';
        echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<script>$("#notificationModal").modal("show");</script>';
       
       
    }else{
        if($_POST['regType']=='UG'){
        $reg=($_POST['regNumber']);
        echo  '<meta http-equiv="refresh" content="0; url=UGresult.php?rn='.$_POST["rollNumber"].'&rg='.$reg.'&sem='.$_POST['semester'].' ">';
        }else  if($_POST['regType']=='PG'){
             $reg=($_POST['regNumber']);
            echo  '<meta http-equiv="refresh" content="0; url=PGresult.php?rn='.$_POST["rollNumber"].'&rg='.$reg.'&sem='.$_POST['semester'].' ">'; 
        }
    }
} 
// if($flag==0){
//    echo  '<meta http-equiv="refresh" content="0; url=https://results.cmas.co.in/UGresult.php?rn='.$_POST["rollNumber"].'&rg='.$_POST['regdNumber'].'&sem=">';
// }

// Redirection code moved outside of the conditional block

exit(); // Ensure that script execution stops after redirection
?>