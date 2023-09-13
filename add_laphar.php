<?php
include 'koneksi.php';
// check data untuk nomor urut
$sql = "SELECT id FROM laphar ORDER BY id DESC LIMIT 1";
// Execute the query
$result = $conn->query($sql);
// Check if the query was successful
if ($result) {
    // Loop through the data and display it
    while ($row = $result->fetch_assoc()) {
        // echo "Column 1: " . $row["id"] . "<br>";
        // Insert new Data to into the database
            $sql2 = "INSERT INTO laphar (nomor) VALUES ($row[id]+1)";
            $conn->query($sql2);
            echo $row["id"]+1;
    }
    // Close the result set
    $result->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 ?>