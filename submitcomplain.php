<?php
// submit_complaint.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate input fields
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $agNumber = $_POST['agNumber'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $cnic = $_POST['cnic'];
    $department = $_POST['department'];
    $session = $_POST['session'];
    $degree = $_POST['degree'];
    $semester = $_POST['semester'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $hostelite = $_POST['hostelite'];
    $hostelName = $_POST['hostelName'];
    $roomNumber = $_POST['roomNumber'];
    $complaint = $_POST['complaint'];

    // Check if required fields are empty
    if (empty($agNumber)) {
        echo "Ag Number is required.";
        exit();
    }

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "complaints";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO complaints (email, fname, lname, agNumber, gender, age, cnic, department, session, degree, semester, mobile, address, hostelite, hostelName, roomNumber, complaint) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssisisssssssss", $email, $fname, $lname, $agNumber, $gender, $age, $cnic, $department, $session, $degree, $semester, $mobile, $address, $hostelite, $hostelName, $roomNumber, $complaint);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New complaint recorded successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>