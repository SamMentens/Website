<?php
    include_once 'includes/conn.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css" />
    
<?php
echo date( "Y-m-d", strtotime( "now -1 day" ) );
echo date( "Y-m-d", strtotime( "now -2 day" ) );
?>
    
    
<?php
    
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    
?>
<head>
<title>Table</title>
</head>
    
<?php
    
$sql = "SELECT id, Light, Temperature, reg_date FROM DATA";

$value = "SELECT id FROM DATA";

$result = mysqli_query($conn, $sql);  

echo "<table>
<tr>
    <th>id</th>
    <th>Light</th>
    <th>Temperature</th>
    <th>Time</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['Light'] . "</td>";
    echo "<td>" . $row['Temperature'] . "</td>";
    echo "<td>" . $row['reg_date'] . "</td>";
    echo "</tr>";
}
echo "</table>";


mysqli_close($conn);
?>