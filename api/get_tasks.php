<?php
include 'db_connect.php';
header('Content-Type: application/json');

//Fetch Tasks from DB
$priority = $_GET['priority'] ?? '';
$sort = $_GET['sort'] ?? 'due_date';
$allowedSort = ['due_date', 'priority'];
if (!in_array($sort, $allowedSort)) $sort = 'due_date';

//Apply Filter/Sort Logic
$sql = "SELECT id, title, due_date, priority, status FROM tasks";
$params = [];
$where = [];
if ($priority) {
    $where[] = "priority = ?";
    $params[] = $priority;
}
if ($where) $sql .= " WHERE " . implode(' AND ', $where);
$sql .= " ORDER BY " . $sort . " ASC";

$stmt = $conn->prepare($sql);
if ($params) {
    $types = str_repeat('s', count($params));
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result = $stmt->get_result();
$data = [];
while ($row = $result->fetch_assoc()) $data[] = $row;

echo json_encode($data);

$stmt->close();
$conn->close();
