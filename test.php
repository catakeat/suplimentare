<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "suplimentare";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Retrieve column names
$tableName = "users";
$sql = "SHOW COLUMNS FROM $tableName";
$result = $conn->query($sql);

if (!$result) {
    die("Error fetching column names: " . $conn->error);
}

$columnNames = array();
while ($row = $result->fetch_array()) {
    $columnNames[] = $row[0];
}

// Step 3: Fetch data and display in an HTML table
$sql = "SELECT * FROM $tableName";
$result = $conn->query($sql);

if (!$result) {
    die("Error fetching data: " . $conn->error);
}

echo "<table border='1'><tr>";
foreach ($columnNames as $columnName) {
    echo "<th>$columnName</th>";
}
echo "</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    foreach ($columnNames as $columnName) {
        echo "<td>" . $row[$columnName] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

// Close the connection
$conn->close();
?>

