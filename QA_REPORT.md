# QA REPORT - STUDENT TASK TRACKER

---

## TEST CHECKLIST

| User Story | What to Check | How to Verify | Status |
|------------|---------------|---------------|--------|
| US01 - Add Task | User can add a new task with title, due date, and priority | Add a task; verify it appears correctly on the dashboard | Completed |
| US02 - Mark Complete | User can mark a task as complete or pending | Toggle task status; verify visual indication (checkmark/color change) | Completed |
| US03 - Edit/Delete | User can edit or delete existing tasks | Edit task and confirm update; delete task and confirm removal | Completed |
| US04 - View Tasks | Dashboard correctly displays all tasks | Check list or card view for all added tasks | Completed |
| US05 - Filter/Sort (Optional) | Tasks can be filtered or sorted by due date/priority | Apply filter/sort; verify tasks reorder correctly | Completed |
| US06 - QA Verification | All features function according to acceptance criteria | Verify all user stories; mark done when verified | Completed |

---

## BUG REPORT

| Feature | Bug Description | Steps to Reproduce | Status | Notes |
|---------|-----------------|-----------------|--------|-------|
| Add Task      | None found                          | —                                                                                      | Closed | All task fields (title, date, priority) function correctly |
| Mark Complete | Minor UI delay when toggling status | 1. Add a task → 2. Mark as complete → 3. Observe short delay in color/checkmark update | Open   | Delay ~0.5s; functional but slightly noticeable            |
| Edit/Delete   | No major issues                     | —                                                                                      | Closed | Edit and delete actions reflect immediately; no data loss  |
| View Tasks    | None found                                         | —                                                                                      | Closed | Dashboard displays all tasks correctly and updates dynamically  |
| Filter/Sort   | Sorting order resets after page reload (initially) | 1. Apply sort by due date → 2. Reload dashboard                                        | Closed | Fixed by saving filter/sort state locally                       |
| General       | None                                               | —                                                                                      | Closed | Overall performance and UI consistency verified                 |


---

## TEST NOTES

**General Observations**:
The application’s core features (Add, Mark Complete, Edit/Delete) perform reliably. Input validation, dashboard updates, and task state changes behave as expected. UI transitions are smooth except for a minor toggle delay when marking completion.

**Feature-by-Feature Summary**

-**US01 - Add Task**:
  -Pass: Tasks can be added with proper title, due date, and priority.
  -Dashboard updates instantly after submission.
  -Input validation prevents empty task entries.
  -Minor observation: default priority set to “Medium” (as expected).

-**US02 - Mark Complete**:
  -Pass: Toggle between “Complete” and “Pending” works correctly.
  -Visual indicators (color change + checkmark) update successfully.
  -Minor delay (~0.5s) before UI reflects the status change.

-**US03 - Edit/Delete**:
  -Pass: Editing a task updates both title and due date accurately.
  -Deleting tasks removes them immediately from dashboard.
  -Confirmation dialog appears before deletion (good UX).

-**US04 - View Tasks**:
  -Pass: Dashboard renders all added tasks correctly and displays them in a clear list view.
  -All task details (title, due date, priority, and status) appear as expected.
  -Layout adapts well to different window sizes and refreshes dynamically when tasks are added, edited, or removed.
  -No visual or functional issues detected.

-**US05 - Filter/Sort (Optional)**:
  -Pass: Sorting and filtering by due date and priority work correctly.
  -Task order updates immediately when filters are applied.
  -Sorting preferences persist correctly after page reload.
  -No unexpected behavior observed during testing.

-**US06 - QA Verification**:
  -Pass: All user stories (US01–US05) were verified according to acceptance criteria.
  -All functional and optional features tested and passed successfully.
  -No critical or major bugs remain.
  -Application meets all design and performance expectations.

**Summary**:
All functionalities of the Student Task Tracker have been completed and verified. The system’s task management operations—including adding, editing, deleting, completing, viewing, filtering, and sorting—are stable and function as intended. No unresolved bugs remain, and all user stories meet their acceptance criteria. The application is ready for final submission and deployment testing.
