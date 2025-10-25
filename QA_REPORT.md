# QA REPORT - STUDENT TASK TRACKER

---

## TEST CHECKLIST

| User Story | What to Check | How to Verify | Status |
|------------|---------------|---------------|--------|
| US01 - Add Task | User can add a new task with title, due date, and priority | Add a task; verify it appears correctly on the dashboard | Completed |
| US02 - Mark Complete | User can mark a task as complete or pending | Toggle task status; verify visual indication (checkmark/color change) | Completed |
| US03 - Edit/Delete | User can edit or delete existing tasks | Edit task and confirm update; delete task and confirm removal | Completed |
| US04 - View Tasks | Dashboard correctly displays all tasks | Check list or card view for all added tasks | Pending |
| US05 - Filter/Sort (Optional) | Tasks can be filtered or sorted by due date/priority | Apply filter/sort; verify tasks reorder correctly | Pending |
| US06 - QA Verification | All features function according to acceptance criteria | Verify all user stories; mark done when verified | Pending |

---

## BUG REPORT

| Feature | Bug Description | Steps to Reproduce | Status | Notes |
|---------|-----------------|-----------------|--------|-------|
| Add Task      | None found                          | —                                                                                      | Closed | All task fields (title, date, priority) function correctly |
| Mark Complete | Minor UI delay when toggling status | 1. Add a task → 2. Mark as complete → 3. Observe short delay in color/checkmark update | Open   | Delay ~0.5s; functional but slightly noticeable            |
| Edit/Delete   | No major issues                     | —                                                                                      | Closed | Edit and delete actions reflect immediately; no data loss  |


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
  -Pending: Awaiting verification of full dashboard rendering.

-**US05 - Filter/Sort (Optional)**:
  -Pending: Not yet implemented or tested.

-**US06 - QA Verification**:
  -Pending: Will finalize after all user stories verified.

**Summary**:
Core task management features (Add, Complete, Edit/Delete) are stable and meet acceptance criteria. Remaining testing should focus on viewing, filtering, and sorting functionalities once implemented.
