<!DOCTYPE html>
<html>
<head>
	<title>View Applied Leaves</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		a {
			color: blue;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<?php
		// Insert the PHP code to display the records of applied leaves from the 'leaves' table
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

// Retrieve the data from the 'leaves' table
$sql = "SELECT * FROM leaves WHERE statuss = 'Applied'";
$result = mysqli_query($conn, $sql);

// Display the data in an HTML table
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Leave ID</th><th>Employee ID</th><th>Start Date</th><th>End Date</th><th>Number of Days</th><th>Reason</th><th>Action</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["leaveid"] . "</td>";
        echo "<td>" . $row["empid"] . "</td>";
        echo "<td>" . $row["startdate"] . "</td>";
        echo "<td>" . $row["enddate"] . "</td>";
        echo "<td>" . $row["numdays"] . "</td>";
        echo "<td>" . $row["reason"] . "</td>";
        echo "<td><a href='approve_leave.php?id=" . $row["leaveid"] . "'>Approve</a> | <a href='reject_leave.php?id=" . $row["leaveid"] . "'>Reject</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No leaves applied.";
}

// Close the database connection
mysqli_close($conn);
?>

	
</body>
</html>
