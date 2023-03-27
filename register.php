<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = mysqli_connect('localhost', 'root', '', 'ptcmdb') or die("Connection failed: " . mysqli_connect_error());

    if (isset($_POST['sentForm'])) {
        if (!empty($_POST['complete_name']) && !empty($_POST['complete_address']) && !empty($_POST['age']) && !empty($_POST['birthplace']) && !empty($_POST['educational_attainment']) && !empty($_POST['contact']) && !empty($_POST['course'])) {

            $complete_name = mysqli_real_escape_string($conn, $_POST['complete_name']);
            $complete_address = mysqli_real_escape_string($conn, $_POST['complete_address']);
            $age = mysqli_real_escape_string($conn, $_POST['age']);
            $birthplace = mysqli_real_escape_string($conn, $_POST['birthplace']);
            $educational_attainment = mysqli_real_escape_string($conn, $_POST['educational_attainment']);
            $contact = mysqli_real_escape_string($conn, $_POST['contact']);
            $course = mysqli_real_escape_string($conn, $_POST['course']);

            $stmt = mysqli_prepare($conn, "INSERT INTO students_info (complete_name, complete_address, age, birthplace, educational_attainment, contact, course) VALUES (?, ?, ?, ?, ?, ?, ?)");
		

            mysqli_stmt_bind_param($stmt, 'ssissss', $complete_name, $complete_address, $age, $birthplace, $educational_attainment, $contact, $course);

            if (mysqli_stmt_execute($stmt)) {
                echo "Data Successfully Saved!"; 
            } else {
                echo "An error occurred while saving the data.";
            }

            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($conn);
}
?>