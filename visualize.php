<?php
// Database connection settings
$host = 'localhost';
$db = 'temperature_pi'; // Replace with your database name
$user = 'michiel'; // Replace with your database user
$password = 'Michiel43.'; // Replace with your database password

// Create a connection
$conn = pg_connect("host=$host dbname=$db user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Query to fetch data
$query = "SELECT * FROM sensors"; // Replace 'sensors' with your actual table name
$result = pg_query($conn, $query);

if (!$result) {
    die("Query failed: " . pg_last_error());
}

// Display data
echo "<h1>Data Visualization</h1>";
echo "<table border='1'>";
echo "<tr><th>Temperature</th><th>Timestamp</th></tr>"; // Adjust columns as needed

while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['time']) . "</td>";
    echo "<td>" . htmlspecialchars($row['temperature']) . "</td>";
    echo "</tr>";
}
echo "</table>";

// Free result and close connection
pg_free_result($result);
pg_close($conn);
?>