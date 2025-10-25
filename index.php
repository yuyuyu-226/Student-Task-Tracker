<?php
// index.php - Frontend page (uses AJAX to call api endpoints)
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Task Tracker</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="container py-4">
    <h1 class="mb-3">Student Task Tracker</h1>

    <div class="card mb-3">
      <div class="card-body">
        <form id="taskForm" class="row g-2">
          <div class="col-md-5">
            <input type="text" id="title" name="title" class="form-control" placeholder="Task title" required>
          </div>
          <div class="col-md-3">
            <input type="date" id="due_date" name="due_date" class="form-control" required>
          </div>
          <div class="col-md-2">
            <select id="priority" name="priority" class="form-select">
              <option value="High">High</option>
              <option value="Medium" selected>Medium</option>
              <option value="Low">Low</option>
            </select>
          </div>
          <div class="col-md-2 d-grid">
            <button type="submit" class="btn btn-primary">Add Task</button>
          </div>
        </form>
        <div id="formMsg" class="mt-2"></div>
      </div>
    </div>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>