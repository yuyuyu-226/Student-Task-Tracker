<?php
include 'db_connect.php';
$id = $_POST['id'] ?? '';
$title = $_POST['title'] ?? '';
$due_date = $_POST['due_date'] ?? '';
$priority = $_POST['priority'] ?? '';
if (!$id || !$title || !$due_date) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing fields']);
    exit;
}
$stmt = $conn->prepare("UPDATE tasks SET title=?, due_date=?, priority=? WHERE id=?");
$stmt->bind_param('sssi', $title, $due_date, $priority, $id);
$stmt->execute();
echo json_encode(['success' => true]);
$stmt->close();
$conn->close();
