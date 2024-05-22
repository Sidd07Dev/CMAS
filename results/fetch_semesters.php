<?php
// Check if the course parameter is set in the POST request
if(isset($_POST['course'])) {
    // Simulating database query to fetch semesters based on course
    $course =trim($_POST['course']);
    // Assuming UG and PG courses have different semester structures
    $semesters = ($course == 'UG') ? array('1st', '2nd', '3rd', '4th', '5th', '6th') : array('1st', '2nd', '3rd', '4th');

    // Generating HTML for semester options
    $options = '<label for="semester">Select Semester:</label><br>';
    foreach($semesters as $semester) {
        $options .= '<div class="form-check form-check-inline">';
        $options .= '<input class="form-check-input" type="radio" name="semester" id="'.$semester.'Sem" value="'.$semester.'">';
        $options .= '<label class="form-check-label" for="'.$semester.'Sem">'.$semester.'</label>';
        $options .= '</div>';
    }

    // Outputting the HTML for semester options
    echo $options;
    exit;
} else {
    // If course parameter is not set, return empty response
    echo '';
}
?>
