<?php
include 'db_connect.php';
$title = $_POST['title'] ?? '';
$due_date = $_POST['due_date'] ?? '';
$priority = $_POST['priority'] ?? 'Medium';
if (!$title || !$due_date) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing fields']);
    exit;
}
$stmt = $conn->prepare("INSERT INTO tasks (title, due_date, priority, status) VALUES (?, ?, ?, 'Pending')");
$stmt->bind_param('sss', $title, $due_date, $priority);
$stmt->execute();
echo json_encode(['success' => true, 'id' => $stmt->insert_id]);
$stmt->close();
$conn->close();
