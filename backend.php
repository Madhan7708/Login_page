<?php
session_start();
include("db.php");

if (isset($_POST["signin"])) {
    $userid = $_POST["userid"];
    $pass = $_POST["pass"];

    // Query to check if the user exists
    $sql = "SELECT * FROM login WHERE userid='$userid' AND password='$pass'";
    $result = $conn->query($sql);

    // Check if the query returned any result
    if ($result->num_rows > 0) {
        // User found, set session
        $_SESSION['userid'] = $userid;

        // Return success response as JSON
        echo json_encode([
            'status' => 'success',
            'userid' => $userid
        ]);
    } else {
        // Return failure response as JSON
        echo json_encode([
            'status' => 'failure'
        ]);
    }
}
?>
