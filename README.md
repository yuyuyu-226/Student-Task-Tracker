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

## SPRINT PLANNING

### SPRINT GOAL:
“To deliver a functional Student Task Tracker prototype with CRUD functionality, live task status updates, and automated deployment via CI/CD pipeline.”

---

### USER STORIES / SPRINT BACKLOG CARDS

| User Story | Acceptance Criteria | Assigned To | Status |
|-------------|---------------------|--------------|---------|
| As a user, I want to add a task with a title and due date so I can plan my schedule. | Form allows adding new tasks; appears on the dashboard. | Frontend | Completed |
| As a user, I want to mark tasks as complete so I can track my progress. | Task displays a check or color change once marked complete. | Backend | Completed |
| As a user, I want to edit or delete existing tasks. | Users can modify or remove a task from the dashboard. | Backend | Completed |
| As a user, I want to view all my tasks in a list or card view. | Dashboard displays all tasks properly. | Frontend | Completed |
| As a QA, I want to test each feature to ensure all tasks work as expected. | The test report lists all features tested and results. | QA | Completed |

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
  
---

## DAY 3 (SUNDAY) - SPRINT REVIEW AND RETROSPECTIVE

### Activities:
- Integrated all frontend and backend modules successfully.
- QA testing completed where all user stories (US01–US06) passed based on acceptance criteria.
- CI/CD pipeline tested for deployment readiness.
- Finalized project documentation including Daily Scrum Logs, Git Repository Activity,Sprint Review, and Retrospective.
- Closed all Asana cards; moved all user stories to “Done.”
- Prepared final build and demo-ready version of the system.

### Individual Logs:

| Name | Role | What I Did | What I’ll Do | Blockers |
|------|------|------------|--------------|-----------|
| Christian Yuan Balitaan | Scrum Master (SM) | Facilitated sprint review and retrospective; verified that CI/CD integration is working; ensured all branches were merged and repository activity properly documented; reviewed final project logs and Git commit history. | Finalize sprint documentation submission and oversee project closure. | None |
| Peter Rom Mikael Santiago | Product Owner (PO) | Reviewed and approved QA test results; confirmed all user stories met the acceptance criteria; ensured system aligns with project vision and user needs. | Present final system demo and summarize sprint outcomes. | None |
| Paolo Enrico San Gabriel | Front-End Developer (FD) | Supported final integration testing; resolved minor UI issues found during QA; ensured responsive layout and consistent styling; assisted in preparing the demo-ready version. | Support sprint demo presentation. | None |
| RJ Castellano | Back-End Developer (BD) | Assisted QA in the final round of data validation; ensured database queries are optimized and secure; confirmed all CRUD endpoints and AJAX responses are stable. | Provide deployment setup support if needed. | None |
| Alexander Jade Francisco | QA Tester (QA) | Conducted full test run on all modules; verified CRUD, UI interactions, and filter/sort functionality; generated and committed the QA report; validated the system’s overall stability and functionality. | Finalize and submit QA documentation; close testing checklist. | None |

### ASANA BOARD STATUS (END OF DAY 3)
- All User Stories (US01–US06) are completed and moved to “Done.”
- Frontend, Backend, and Integration subtasks marked complete.
- QA subtasks finished, all tests passed successfully.
- The Asana board is closed.

---
---
# ASANA BOARD

## ASANA BOARD LINK

You may access the Asana board for the project through the link below:  
**[Student Task Tracker – Asana Board](https://app.asana.com/1/968370432165371/project/1211737980440398/list/1211737881700973)**

---

### NOTE:
The Asana board may require permission to view.  
If the project is set to private, only invited members or those within the same Asana workspace or organization will be able to access it.

---
---

# GIT REPOSITORY ACTIVITY

## GITHUB USERNAME OF MEMBERS

| Member | Role | GitHub Username |
|---------|------|-----------------|
| Christian Yuan Balitaan | Scrum Master (SM) | [@yuyuyu-226](https://github.com/yuyuyu-226) |
| Peter Rom Mikael Santiago | Product Owner (PO) | [@Pipo-hub](https://github.com/Pipo-hub) |
| Paolo Enrico San Gabriel | Front-End Developer (FD) | [@paulthecheese79](https://github.com/paulthecheese79) |
| RJ Castellano | Back-End Developer (BD) | [@Rjjjj1412](https://github.com/Rjjjj1412) |
| Alexander Jade Francisco | QA Tester (QA) | [@bogart123456](https://github.com/bogart123456) |

---

## GIT REPOSITORY LINK
You may access the GitHub repository link of the project through this link:  
**[Student Task Tracker Repository](https://github.com/yuyuyu-226/Student-Task-Tracker)**

---

## GITHUB PAGES LINK
You can access the static (front-end only) website through this link:  
**[Student Task Tracker GitHub Pages](https://yuyuyu-226.github.io/Student-Task-Tracker/)**

---

## GIT BRANCHES USED

| Branch Name | Description |
|--------------|-------------|
| `main` | Serves as the main branch for the project. |
| `frontend-ui` | Used by the Front-End Developer to commit and push frontend components of the Student Task Tracker. |
| `backend-crud` | Used by the Back-End Developer to commit and push backend components of the Student Task Tracker. |
| `testing-qa` | Used for merging frontend and backend components for QA testing before creating a pull request into the main branch. |
| `gh-pages` | Automatically created and used by GitHub Pages to host and deploy the project’s static frontend files (from the `docs/` directory) through CI/CD. |

---
---

# SPRINT REVIEW AND RETROSPECTIVE

## SUMMARY OF SPRINT RESULTS

The **Student Task Tracker** project successfully met the sprint goal of developing a fully functional **web-based system** that allows students to add, edit, and manage their academic tasks. All planned **frontend, backend, and QA deliverables** were completed and merged into the `main` branch.

### Accomplishments per Component

- **Frontend** – Completed Add Task form, dashboard UI, edit/delete, mark complete/pending, and filter/sort features.  
- **Backend** – Implemented PHP CRUD endpoints and connected to MySQL via XAMPP (`add_task.php`, `get_tasks.php`, `edit_task.php`, `delete_task.php`, `update_status.php`, `db_connect.php`).  
- **Integration** – Successful frontend–backend integration using AJAX for live task updates, including sorting and filtering features.  
- **QA** – Conducted functionality, usability, and validation tests. All major issues were resolved.  
- **CI/CD** – Implemented continuous deployment via **GitHub Pages** to automatically update the live system upon pushing to the `main` branch (static frontend-only deployment).  
- **Documentation** – Completed all necessary project documentation.  
- **Asana** – All backlog items are now in “Done”; the Asana board is closed, marking the sprint’s completion.  

The **3-day sprint** concluded successfully with all **user stories and goals achieved**.

---

## LESSONS LEARNED

Some of the key takeaways from this sprint include:

- **Git Discipline Matters** – Early coordination on branching and merging prevents future conflicts. A premature pull request from `backend-crud` to `main` and a subsequent revert caused merge confusion later when merging from `testing-qa`. This highlighted the importance of maintaining clean branch histories.  
- **AJAX Integration** – Extra care was needed to ensure smooth frontend–backend data synchronization during testing.  
- **CI/CD Setup** – CI/CD deployment only applied to the static frontend through GitHub Pages, while backend testing was done locally via XAMPP. The process reinforced the need for clear deployment strategies.  
- **Time Management** – Dividing responsibilities per role allowed the team to efficiently complete the sprint within just three days.  

---

## TEAM REFLECTION

Each member contributed effectively to completing the 3-day sprint:

- **Scrum Master (SM)** – Ensured clear communication among members and maintained sprint momentum.  
- **Product Owner (PO)** – Clarified requirements and confirmed that all user stories met the acceptance criteria.  
- **Front-End & Back-End Developers (FD & BD)** – Collaborated closely to synchronize UI components with PHP logic during integration.  
- **QA Tester (QA)** – Validated all features and confirmed that the system met its intended goal without critical issues.  

---

### Overall Reflection

The sprint showcased the team’s ability to **collaborate, adapt, and deliver under tight deadlines**.  
Although the 3-day sprint was brief, it effectively demonstrated each member’s **technical skills, communication, and commitment** to achieving the final project with no major issues.

---
---

# CI/CD INTEGRATION

## OVERVIEW

The **Student Task Tracker** uses **GitHub Actions** and **GitHub Pages** to implement a Continuous Integration / Continuous Deployment (CI/CD) process.  
In this setup, every time a commit is pushed or merged into the `main` branch, a workflow file (`.github/workflows/deploy-static-frontend.yml`) runs automatically to prepare and publish the static frontend to GitHub Pages.

---

## WORKFLOW FILE

The CI/CD workflow configuration can be found in the project repository at:  
**`/.github/workflows/deploy-static-frontend.yml`**

This YAML file defines the automated steps for building the static frontend, committing it to the `main` branch, and deploying the contents of the `docs/` directory to **GitHub Pages**.

---

## HOW IT WORKS

The workflow file will activate when code is pushed to the **main branch**.  
After the workflow activates:

- The action will clean the `docs` folder.  
- Copies all the frontend assets (JS, CSS, and any other updated files) from the `/assets` folder.  
- Converts the main `index.php` file into a static `index.html` file for GitHub Pages.  
- The workflow bot commits the new version of the `docs` folder directly to the `main` branch.  
- Finally, the workflow deploys everything inside `docs/` to **GitHub Pages**, making the updated app instantly live.

