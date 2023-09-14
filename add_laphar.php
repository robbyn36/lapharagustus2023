<?php
ob_start(); // Start output buffering
include 'koneksi.php';

// Check data for the latest ID
$sql = "SELECT id FROM laphar ORDER BY id DESC LIMIT 1";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the latest ID (if available)
    $row = $result->fetch_assoc();
    if ($row) {
        $latestId = $row["id"];

        // Calculate the next ID
        $nextId = $latestId + 1;

        // Insert new data into the database
        $sql2 = "INSERT INTO laphar (nomor) VALUES ($nextId)";
        if ($conn->query($sql2) === TRUE) {
            // Redirect the user to a thank you page
            echo "<script>alert('Data berhasil diubah');document.location='?go=laphar'</script>";
            exit;
        } else {
            echo "Error inserting data: " . $conn->error;
        }
    } else {
        // Handle the case when no records are found
        echo "No records found in the 'laphar' table.";
    }

    // Close the result set
    $result->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

ob_end_flush(); // End output buffering and send the output to the browser
?>
