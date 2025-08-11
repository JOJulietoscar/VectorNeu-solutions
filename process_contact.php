<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and collect form inputs
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $message = $conn->real_escape_string($_POST["message"]);
    $file_path = "";

    // File upload (optional)
    if (isset($_FILES["attachment"]) && $_FILES["attachment"]["error"] == UPLOAD_ERR_OK) {
        $uploadDir = "uploads/";
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $fileName = basename($_FILES["attachment"]["name"]);
        $targetFile = $uploadDir . time() . "_" . $fileName;

        if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFile)) {
            $file_path = $conn->real_escape_string($targetFile);
        }
    }

    // Insert into DB
    $sql = "INSERT INTO contact_form (name, email, phone, message, file_path) 
            VALUES ('$name', '$email', '$phone', '$message', '$file_path')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
