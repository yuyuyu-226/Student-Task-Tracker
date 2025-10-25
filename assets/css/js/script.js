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

  async function loadTasks() {
    const params = new URLSearchParams();
    if (filterPriority.value) params.append("priority", filterPriority.value);
    if (sortBy.value) params.append("sort", sortBy.value);
    const res = await fetch(`${apiBase}/get_tasks.php?${params.toString()}`);
    const data = await res.json();
    renderTasks(data);
  }

  function renderTasks(tasks) {
    tasksContainer.innerHTML = "";
    if (!tasks.length) {
      tasksContainer.innerHTML =
        '<div class="col-12"><p class="empty">No tasks yet — add one!</p></div>';
      return;
    }
    tasks.forEach((task) => {
      const col = document.createElement("div");
      col.className = "col-md-6";
      const statusLabel =
        task.status === "Complete"
          ? '<span class="status-label bg-success text-white">Complete</span>'
          : '<span class="status-label bg-secondary text-white">Pending</span>';
      const completeBtn =
        task.status === "Complete"
          ? `<button class="btn btn-sm btn-secondary btn-toggle" data-id="${task.id}" data-status="Pending">Mark as Pending</button>`
          : `<button class="btn btn-sm btn-success btn-toggle" data-id="${task.id}" data-status="Complete">Mark as Complete</button>`;
      col.innerHTML = `
        <div class="task-card ${
          task.status === "Complete" ? "completed" : "pending"
        }">
          <div class="d-flex justify-content-between align-items-start">
            <div>
              <div>${statusLabel}</div>
              <h5 class="mt-2">${escapeHtml(task.title)}</h5>
              <p class="mb-1 small-muted">Due: ${task.due_date} • Priority: ${
        task.priority
      }</p>
            </div>
            <div class="text-end">
              ${completeBtn}
              <div class="mt-2">
                <button class="btn btn-sm btn-outline-secondary btn-edit" data-id="${
                  task.id
                }" data-title="${escapeHtml(task.title)}" data-due="${
        task.due_date
      }" data-priority="${task.priority}">Edit</button>
                <button class="btn btn-sm btn-outline-danger btn-delete" data-id="${
                  task.id
                }">Delete</button>
              </div>
            </div>
          </div>
        </div>
      `;
      tasksContainer.appendChild(col);
    });
  }

  function escapeHtml(text) {
    if (!text) return "";
    return text.replace(
      /[&<>"']/g,
      (m) =>
        ({
          "&": "&amp;",
          "<": "&lt;",
          ">": "&gt;",
          '"': "&quot;",
          "'": "&#39;",
        }[m])
    );
  }

  taskForm.addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(taskForm);
    await fetch(`${apiBase}/add_task.php`, { method: "POST", body: formData });
    formMsg.innerText = "Task added.";
    taskForm.reset();
    await loadTasks(); // Auto-refresh after adding
    setTimeout(() => (formMsg.innerText = ""), 2000);
  });

  tasksContainer.addEventListener("click", async (e) => {
    const editBtn = e.target.closest(".btn-edit");
    const delBtn = e.target.closest(".btn-delete");
    const toggleBtn = e.target.closest(".btn-toggle");

    // Edit Task
    if (editBtn) {
      document.getElementById("edit_id").value = editBtn.dataset.id;
      document.getElementById("edit_title").value = editBtn.dataset.title;
      document.getElementById("edit_due_date").value = editBtn.dataset.due;
      document.getElementById("edit_priority").value = editBtn.dataset.priority;
      editModal.show();
    }

    // Delete Task
    if (delBtn) {
      const id = delBtn.dataset.id;
      if (!confirm("Delete this task?")) return;
      const body = new FormData();
      body.append("id", id);
      await fetch(`${apiBase}/delete_task.php`, { method: "POST", body });
      await loadTasks();
    }
    
    if (toggleBtn) {
        const id = toggleBtn.dataset.id;
        const newStatus = toggleBtn.dataset.status;
        const body = new FormData();
        body.append("id", id);
        body.append("status", newStatus);
        await fetch(`${apiBase}/update_status.php`, { method: "POST", body });
        await loadTasks(); // Reflect UI immediately
      }
   });

   editForm.addEventListener("submit", async (e) => {
    e.preventDefault();
    const body = new FormData(editForm);
    body.append("id", document.getElementById("edit_id").value);
    await fetch(`${apiBase}/edit_task.php`, { method: "POST", body });
    editModal.hide();
    await loadTasks();
  });

  // Auto-load tasks initially
  loadTasks();
});
