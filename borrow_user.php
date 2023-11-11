<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cover = $_GET['cover'];
    $title = $_GET['title'];
    $disc = $_GET['disc'];
    $writer = $_GET['writer']; // Set a default value if 'writer' is not present in the URL
    include "./db/connection_db.php";
    $status = 1;


    // // Prepare the SQL statement
    // $sql = "INSERT INTO borrow (borrower, tittle, writter, disc, cover, status) VALUES (?, ?, ?, ?, ?, ?)";

    // // Use prepared statements to prevent SQL injection
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("ssssss", $user_auth, $title, $writer, $disc, $cover, $status);

    // // Execute the statement
    // if ($stmt->execute()) {
    //     echo "Data inserted successfully!";
    //     sleep(2);
    //     header("Location:./index.php?success=Borrowed successfully.");
    //     exit();
    // } else {
    //     echo "Error: " . $stmt->error;
    // }

    // // Close the statement and connection
    // $stmt->close();
    // $conn->close();
} else {
    echo "Error: Missing 'id' parameter!";
}
