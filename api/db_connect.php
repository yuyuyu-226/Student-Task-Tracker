<?php
// db_connect.php
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db   = 'student_tracker_db';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(['error' => 'DB connect error']);
    exit;
}
$conn->set_charset('utf8mb4');
