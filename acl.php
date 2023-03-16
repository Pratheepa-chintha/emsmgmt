<?php
// Establish connection to the database
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "emsdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check which form was submitted
if (isset($_POST['Apply'])) {
    // Get the form data for leave application
    $empid = $_POST['empid'];
    $startdate = $_POST['startdate'];
    $a=strtotime($startdate);
    $enddate = $_POST['enddate'];
    $b=strtotime($enddate);
    $numdays = floor(($b - $a) / (60 * 60 * 24));
    $reason = $_POST['reason'];
    // Insert the data into the 'applied_leaves' table
    $sql = "INSERT INTO leaves (leaveid, empid, startdate, enddate, numdays, reason, statuss) VALUES (NULL, '$empid', '$startdate', '$enddate', '$numdays', '$reason', 'Applied')";
    
    if (mysqli_query($conn, $sql)) {
        $leaveid = mysqli_insert_id($conn);
        echo "Leave applied successfully! Your leave ID is: $leaveid";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} elseif (isset($_POST['Cancel'])) {
    // Get the form data for leave cancellation
    $empid = $_POST['empid'];
    $leaveid = $_POST['leaveid'];

    // Insert the data into the 'cancelled_leaves' table
    $sql = "UPDATE leaves SET `statuss`='cancelled' WHERE empid='$empid' ";

    if (mysqli_query($conn, $sql)) {
        echo "Leave cancelled successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
