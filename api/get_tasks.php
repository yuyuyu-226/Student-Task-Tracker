<<<<<<< HEAD
<?php
include 'db_connect.php';
header('Content-Type: application/json');

//Fetch Tasks from DB
$priority = $_GET['priority'] ?? '';
$sort = $_GET['sort'] ?? 'due_date';
$allowedSort = ['due_date', 'priority'];
if (!in_array($sort, $allowedSort)) $sort = 'due_date';
=======
<?php
include 'db_connect.php';
header('Content-Type: application/json');

//Fetch Tasks from DB
$priority = $_GET['priority'] ?? '';
$sort = $_GET['sort'] ?? 'due_date';
$allowedSort = ['due_date', 'priority'];
if (!in_array($sort, $allowedSort)) $sort = 'due_date';
>>>>>>> e1f4024752b53c3c3a6e10278501856d12e8b19a
