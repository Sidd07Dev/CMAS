<?php

include('Connection.php');
$semId=isset($_POST['semId']) ? $_POST['semId'] : 0;
$countryId = isset($_POST['countryId']) ? $_POST['countryId'] : 0;
$stateId = isset($_POST['stateId']) ? $_POST['stateId'] : 0;
$command = isset($_POST['get']) ? $_POST['get'] : "";






switch ($command) {
    case "country":
        $semId=trim($semId);
        $result1 = "<option>Select Subject</option>";
        $statement = "SELECT DISTINCT HONS as subject1 FROM pm1dtdb1 where SEM='$semId' ";
        $dt = mysqli_query($con, $statement);
        while ($result = $dt->fetch_assoc()) {
            $result1 .= '<option value="' . $result['subject1'] .' ">' . $result['subject1'] . '</option>';
        }
        echo $result1;
        break;


case "state":
    $countryId = trim($countryId);

    $countryId2 = '%' . $countryId . '%'; // Concatenate '%' symbols around $countryId
   
    $statement = "SELECT DISTINCT SUB as sub FROM pm1dtdb1 where SEM='$semId' and SUB like '%$countryId%'";
    //   $statement = "SELECT DISTINCT SUB as sub FROM pm1dtdb1 where SEM='$semId' and HONS='$countryId'";
    $dt = mysqli_query($con, $statement);

    while ($result = $dt->fetch_assoc()) {
        $result1 .= '<option value="' . $result['sub'] . '">' . $result['sub'] . '</option>';
    }
    echo $result1;
    break;
   

        case "semesters":
            $result1 = "<option>Select Semester</option>";
            $statement = " select distinct SEM as sem from pm1dtdb1 order by sem ASC";
            $dt = mysqli_query($con, $statement);
    
            while ($result = mysqli_fetch_array($dt)) {
                $result1 .= "<option value=" . $result['sem'] . ">" . $result['sem'] . "</option>";
            }
            echo $result1;
            break;
}

// exit();
