<?php
include('./server/connection.php');
include('./server/featured.php');

$sql = "SELECT COUNT(*) FROM vehicle";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);
$count = $row[0];


// 
$sql = "SELECT * FROM vehicle"; // Assuming you want all data
$all = mysqli_query($conn, $sql);

// Get all rows as an associative array
$data = [];
while ($row = mysqli_fetch_assoc($all)) {
  $data[] = $row;
}

$value = "Ford"; // Value to count
$columnCount = 0; // Initialize count

// Loop through each row (data point)
foreach ($data as $row) {
  // Count occurrences of the value in each row (column)
  $columnCount += count(array_filter($row, function ($item) use ($value) {
    return $item === $value;
  }));
}


$duh = "SELECT DISTINCT vehicle_manufacture FROM vehicle"; // Replace with your table
$bom = mysqli_query($conn, $duh);
?>