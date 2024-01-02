<?php
require('koneksi.php');

// Check if 'id' is set in POST data
if(isset($_POST['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = intval($_POST['id']);

    // Prepare the query using a parameterized statement
    $query = "UPDATE FROM ticket WHERE id = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    
    // Bind the parameter
    $stmt->bind_param("i", $id);
    
    // Execute the query
    $stmt->execute();
    
    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        // Deletion successful
        echo '<strong>Contact Has Been Deleted</strong><br /><br />';
        
        // Redirect to index.php after a short delay (change the delay as needed)
        header("refresh:0.5; url=index.php");
        exit(); // Ensure that the script stops execution after the redirection
    } else {
        // Deletion failed
        echo '<strong>Deletion Failed</strong><br /><br />';
    }
    
    // Close the statement
    $stmt->close();
} else {
    // 'id' not set in POST data
    echo '<strong>Invalid Request</strong><br /><br />';
}

// Close the database connection
$conn->close();
?>