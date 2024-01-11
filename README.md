# Ticketing System

**Ticketing System** is a simple application for managing tickets of tasks or issues that are either pending or completed. The application allows users to add, edit, delete, and view the list of tickets.

## Features

1. **Add Ticket Data**

   - Users can add ticket data by clicking the "+ Add Ticket" button.
   - Each ticket includes information such as name, issue details, and date of the issue.

2. **List of Pending Tickets**

   - Displays a list of tickets that are pending.
   - Users can view, edit, delete, and mark tickets as completed in this list.
   - Option to print the list of pending tickets is available.

3. **List of Completed Tickets**

   - Displays a list of tickets that are completed.
   - Users can view, edit, delete, and revert the status of tickets to pending.

4. **Ticket Search**

   - Users can search for tickets based on the name or other information.

5. **User Profile**
   - Displays the name of the currently active user.
   - Users can log out.

## How to Use

1. **Add Ticket Data**

   - Click the "+ Add Ticket" button in the "Add Data" section.
   - Fill out the form with the appropriate ticket information.
   - Click the "Submit" button to add the ticket.

2. **Edit Ticket**

   - In the list of pending or completed tickets, click the "Edit" button on the ticket you want to edit.
   - Fill out the form with the new information.
   - Click the "Update" button to save the changes.

3. **Delete Ticket**

   - In the list of pending or completed tickets, click the "Delete" button on the ticket you want to delete.
   - Confirm the deletion by choosing "Yes" or "Cancel."

4. **Mark as Completed**

   - In the list of pending tickets, click the "Complete" button on the ticket that is completed.
   - The ticket will be moved to the list of completed tickets.

5. **Revert to Pending**

   - In the list of completed tickets, click the "Uncomplete" button on the ticket you want to revert to pending.
   - The ticket will be moved to the list of pending tickets.

6. **Ticket Search**

   - Enter keywords in the search box at the top of the page.
   - Press the "Search" button or press "Enter" on the keyboard.

7. **Logout**
   - Click the profile button in the top right corner.
   - Select the "Logout" option to log out of the account.

## Folder Structure

- assets/
  - icon/
    - artience.svg
    - profil.svg
    - search.svg
    - print.svg
    - delete.svg
    - edit.svg
    - complete.svg
    - uncomplete.svg
    - logout.svg
    - profil-image.svg
  - styles/
    - style.css
  - script.js
- auth/
  - login.php
  - logout.php
- config/
  - koneksi.php
- pages/
  - add.php
  - edit.php
  - delete.php
  - complete.php
  - uncomplete.php
- Components/
  - component.php
- printcomplete.php
- printuncomplete.php
- index.php
- README.md
