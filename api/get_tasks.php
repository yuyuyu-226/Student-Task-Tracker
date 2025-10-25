<?php
include 'db_connect.php';
header('Content-Type: application/json');

//Fetch Tasks from DB
$priority = $_GET['priority'] ?? '';
$sort = $_GET['sort'] ?? 'due_date';
$allowedSort = ['due_date', 'priority'];
if (!in_array($sort, $allowedSort)) $sort = 'due_date';
