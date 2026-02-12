# CRUD Application in PHP

A simple PHP-based CRUD (Create, Read, Update, Delete) application for managing student records with MySQL database integration and Bootstrap UI.

---

## Features Implemented

### Core CRUD Operations
- **Create** - Add new student records with first name, last name, and age
- **Read** - Display all student records in a responsive table format
- **Update** - Edit existing student information
- **Delete** - Remove student records with confirmation dialog

### User Interface
- Clean and responsive design using Bootstrap 5
- Modal popup form for adding new students
- Success/error message notifications
- Confirmation dialog before deletion
- Styled table with hover effects

### Database Integration
- MySQL database connection using mysqli
- Secure database configuration with constants
- Error handling for database operations

---

## Project Structure

```
crud_app/
├── index.php          # Main page - displays all students and add form
├── insert_data.php    # Handles creating new student records
├── update.php         # Handles editing existing student records
├── delete.php         # Handles deleting student records
├── dbconn.php         # Database connection configuration
├── header.php         # Common HTML header with Bootstrap
├── footer.php         # Common HTML footer with Bootstrap scripts
├── style.css          # Custom CSS styles
└── README.md          # This file
```

---

## How It Works

### 1. Database Connection (`dbconn.php`)
Establishes connection to MySQL database using defined constants:
- Host: localhost
- Database: crud_operation
- Username: root
- Password: (empty)

### 2. Main Page (`index.php`)
- Displays all student records from the database
- Shows Bootstrap modal for adding new students
- Handles success/error messages via URL parameters
- Provides Update and Delete buttons for each record

### 3. Insert Data (`insert_data.php`)
- Validates that first name is not empty
- Inserts new student record into database
- Redirects back to index with success/error message

### 4. Update Data (`update.php`)
- Retrieves specific student record by ID
- Displays pre-populated form with current data
- Updates record in database upon submission
- Redirects back to index with success message

### 5. Delete Data (`delete.php`)
- Deletes student record by ID
- Redirects back to index with success message

### 6. Header & Footer (`header.php`, `footer.php`)
- Provides consistent page layout
- Includes Bootstrap 5 CSS and JavaScript
- Links custom stylesheet

---

## Database Schema

```sql
CREATE DATABASE crud_operation;

USE crud_operation;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50),
    age INT
);
```

---

## Technologies Used

- **PHP** - Server-side scripting
- **MySQL** - Database management
- **Bootstrap 5** - Frontend framework
- **HTML/CSS** - Markup and styling
- **JavaScript** - Confirmation dialogs

---

## Setup Instructions

1. Install XAMPP or similar local server environment
2. Place the project folder in `htdocs/` directory
3. Create MySQL database named `crud_operation`
4. Create `students` table with the schema above
5. Access the application at `http://localhost/crud_app/`

---

## Usage

1. **View Students** - Open `index.php` to see all records
2. **Add Student** - Click "ADD STUDENTS" button and fill the form
3. **Edit Student** - Click "Update" button on any record
4. **Delete Student** - Click "Delete" button and confirm

---

## Security Note

This is a basic educational project. For production use, implement:
- Prepared statements to prevent SQL injection
- Input sanitization and validation
- Password protection for database credentials
- Session management for authentication
