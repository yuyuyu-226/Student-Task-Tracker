<?php
include 'db_connect.php';
$id = $_POST['id'] ?? '';
$status = $_POST['status'] ?? 'Pending';
if (!$id) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing id']);
    exit;
}
if (!in_array($status, ['Pending', 'Complete'])) $status = 'Pending';
$stmt = $conn->prepare("UPDATE tasks SET status=? WHERE id=?");
$stmt->bind_param('si', $status, $id);
$stmt->execute();
echo json_encode(['success' => true]);
$stmt->close();
$conn->close();
