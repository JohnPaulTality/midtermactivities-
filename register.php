<?php
$file = "students.txt";

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $course = $_POST['course'];
    $email = $_POST['email'];

    $data = "Name: $name | Student ID: $student_id | Course: $course | Email: $email\n";

    file_put_contents($file, $data, FILE_APPEND);
    echo "<h2>You are registered now ✅</h2>";
    echo "<a href='index.html'>Go Back</a>";
}

if (isset($_POST['clear'])) {
    file_put_contents($file, "");
    echo "<h2>All records cleared 🗑️</h2>";
    echo "<a href='index.html'>Go Back</a>";
}
?>
