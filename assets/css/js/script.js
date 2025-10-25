// assets/js/script.js - AJAX interactions to API endpoints (live updates)
const apiBase = "api";

document.addEventListener("DOMContentLoaded", () => {
  const taskForm = document.getElementById("taskForm");
  const tasksContainer = document.getElementById("tasksContainer");
  const formMsg = document.getElementById("formMsg");

  const filterPriority = document.getElementById("filterPriority");
  const sortBy = document.getElementById("sortBy");

  const editModalEl = document.getElementById("editModal");
  const editModal = new bootstrap.Modal(editModalEl);
  const editForm = document.getElementById("editForm");

  taskForm.addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(taskForm);
    await fetch(`${apiBase}/add_task.php`, { method: "POST", body: formData });
    formMsg.innerText = "Task added.";
    taskForm.reset();
    await loadTasks(); // Auto-refresh after adding
    setTimeout(() => (formMsg.innerText = ""), 2000);
  });

  // Auto-load tasks initially
  loadTasks();
});
