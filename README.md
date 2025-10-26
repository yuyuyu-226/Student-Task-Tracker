# STUDENT TASK TRACKER

## SPRINT DURATION:
FRIDAY - SUNDAY (October 24 - October 26)

## SOFTWARE FEATURE:
“STUDENT TASK TRACKER”

### Goal:
Develop a simple Student Task Tracker System that allows users (students) to add, edit, and monitor their academic tasks or deadlines.

### Core Features:
- Add new task (title, due date, priority)
- Mark task as complete or pending
- Edit or delete existing task
- View all tasks in a simple dashboard
- (Optional) Filter or sort by due date

---

## SCRUM ROLES AND RESPONSIBILITIES

| Name | Role | Responsibilities | Expected Deliverables |
|------|------|------------------|------------------------|
| Christian Yuan Balitaan | Scrum Master (SM) | Facilitates Scrum ceremonies, ensures process adherence, and removes blockers. | Leads Daily Stand-ups, maintains Scrum Logs, ensures collaboration. |
| Peter Rom Mikael Santiago | Product Owner (PO) | Represents the client and defines the project vision, sprint goals, and priorities. | Drafts the Sprint Goal and approves the Sprint Backlog. |
| Paolo Enrico San Gabriel | Front-End Developer (FD) | Designs UI, implements forms and task display. | Provides Git logs, commits per task, and participates in Daily Scrums. |
| RJ Castellano | Back-End Developer (BD) | Handles CRUD logic, connects data storage (local or DB). | Provides Git logs, commits per task, and participates in Daily Scrums. |
| Alexander Jade Francisco | QA Tester (QA) | Tests all features, documents bugs, verifies Definition of Done. | Submits test notes, bug list, and contributes to Sprint Review. |

---

## 🧭 SPRINT PLANNING

### 🏁 SPRINT GOAL:
“To deliver a functional Student Task Tracker prototype with CRUD functionality, live task status updates, and automated deployment via CI/CD pipeline.”

---

### 📋 USER STORIES / SPRINT BACKLOG CARDS

| User Story | Acceptance Criteria | Assigned To | Status |
|-------------|---------------------|--------------|---------|
| As a user, I want to add a task with a title and due date so I can plan my schedule. | Form allows adding new tasks; appears on the dashboard. | Frontend | To Do |
| As a user, I want to mark tasks as complete so I can track my progress. | Task displays a check or color change once marked complete. | Backend | To Do |
| As a user, I want to edit or delete existing tasks. | Users can modify or remove a task from the dashboard. | Backend | To Do |
| As a user, I want to view all my tasks in a list or card view. | Dashboard displays all tasks properly. | Frontend | To Do |
| As a QA, I want to test each feature to ensure all tasks work as expected. | The test report lists all features tested and results. | QA | To Do |

---

## DEFINITION OF DONE
- All CRUD features are functional (Add/Edit/Delete/Mark Complete)
- Code pushed and merged into the main branch
- QA verified functionality and UI consistency
- No major console or runtime errors
- Successfully deployed via GitHub Pages (CI/CD done)

---

## ENTRY CRITERIA
- Backlog approved by Product Owner
- Repo and Asana tasks created
- Roles assigned and team synced
  
---

## EXIT CRITERIA
- Working prototype deployed online
- All user stories closed in Asana
- Sprint Review completed and documented

---
---

# DAILY SCRUM LOGS

## DAY 1 (FRIDAY) - SPRINT PLANNING

### Activities:
- Defined Sprint Goal and User Stories.
- Created GitHub repository and Asana board.
- Assigned feature branches and roles.
- Initialized GitHub repository with “main” branch and feature branches: frontend-ui, backend-crud, and qa-testing.

### Individual Logs:

| Name | Role | What I Did | What I’ll Do | Blockers |
|------|------|------------|--------------|-----------|
| Christian Yuan Balitaan | Scrum Master (SM) | Facilitated sprint planning; set up Asana columns and invited members; ensured tasks aligned with sprint goals. Set up the GitHub environment for the project. | Conduct Day 2 stand-up and monitor Git commits. | None |
| Peter Rom Mikael Santiago | Product Owner (PO) | Defined project vision, wrote user stories, approved backlog items; verified all cards created in Asana. Moved the cards to “To Do”. | Review progress and clarify acceptance criteria during Day 2. | None |
| Paolo Enrico San Gabriel | Front-End Developer (FD) | Discussed layout and basic UI wireframe for the output. | Start HTML/CSS UI development for Add Task and Mark Complete. | None |
| RJ Castellano | Back-End Developer (BD) | Planned PHP CRUD logic and DB schema. | Set up XAMPP database and PHP scripts for CRUD. | None |
| Alexander Jade Francisco | QA Tester (QA) | Defined test cases and checklist for the QA report and committed the template to the GitHub repo. | Prepare test data and environment for feature testing on Day 3. | None |

### ASANA BOARD STATUS (END OF DAY 1)
- All created user stories (Backlogs) from US01–US06 are moved to “To Do”.
- Columns Established: Backlog, To Do, In Progress, Done.
- No stories are in “In Progress” yet; development will begin on Day 2.
  
---

## DAY 2 (SATURDAY) - DEVELOPMENT AND DAILY SCRUM

### Activities:
- Frontend UI development completed for Add Task form, task dashboard, edit/delete buttons, mark complete/pending, and live filter/sort.
- Backend PHP CRUD endpoints created and tested: `add_task.php`, `get_tasks.php`, `edit_task.php`, `delete_task.php`, `update_status.php`.
- Integrated frontend and backend for live updates using AJAX.
- QA template reviewed; test environment prepared.

### Individual Logs:

| Name | Role | What I Did | What I’ll Do | Blockers |
|------|------|------------|--------------|-----------|
| Christian Yuan Balitaan | Scrum Master (SM) | Facilitated Day 2 stand-up; monitored development progress; ensured Git branches aligned with sprint plan. | Conduct Day 3 stand-up; monitor merge requests and commits. | None |
| Peter Rom Mikael Santiago | Product Owner (PO) | Verified acceptance criteria for frontend/backend features; ensured backlog items were implemented correctly. | Review progress and clarify any remaining acceptance criteria. | None |
| Paolo Enrico San Gabriel | Front-End Developer (FD) | Completed HTML/CSS layout for Add Task form and dashboard; implemented `renderTasks()` in `script.js`; integrated live AJAX updates; added edit/delete functionality and mark as complete/pending buttons; implemented live filter and sort UI. | Support backend integration for any bug fixes and prepare frontend for QA testing. | None |
| RJ Castellano | Back-End Developer (BD) | Developed PHP CRUD endpoints: `add_task.php`, `get_tasks.php`, `edit_task.php`, `delete_task.php`, `update_status.php`; tested database connections and query logic; integrated with frontend via AJAX. | Monitor frontend integration and fix any data issues; optimize queries if needed. | None |
| Alexander Jade Francisco | QA Tester (QA) | Reviewed test checklist; set up test environment; prepared initial test data for completed frontend/backend features. | Conduct feature testing on Day 3. | None |

### ASANA BOARD STATUS (END OF DAY 2)
- User stories US01–US06 moved from “To Do” → “In Progress”.
- Subtasks for Frontend and Backend Developers are marked completed.
- Subtasks for QA will be done on Day 3 before moving backlogs to “Done”.

