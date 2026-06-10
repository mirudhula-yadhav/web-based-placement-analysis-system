# Entity Relationship Diagram

## Entities

### Students
- student_id
- student_name
- email
- department
- cgpa
- password

### Companies
- company_id
- company_name
- job_role
- package
- eligibility_criteria

### Placement Posts
- post_id
- company_id
- post_title
- description
- application_deadline

### Applications
- application_id
- student_id
- post_id
- application_status

## Relationships

- One Company can create many Placement Posts.
- One Student can apply for many Placement Posts.
- Applications connect Students and Placement Posts.
