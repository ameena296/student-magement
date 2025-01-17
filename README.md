# Student Management System

A Laravel-based student management system with Tailwind CSS (CDN version).

## Project Setup

### Prerequisites
- PHP >= 8.1
- Composer
- MySQL

### Installation Steps
1. Clone the repository to your local machine.
using the command: git clone https://github.com/ameena296/student-magement.git

2. Setup database
- Create a new database named `student_management`.
- Run the following command to migrate the database: `php artisan migrate`.

3. Set environment variables
- Create a `.env` file in the root directory of the project and add the following environment variables:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=student_management
DB_USERNAME=root
DB_PASSWORD=
```

4. Install dependencies
- Run the following command to install the project dependencies: `composer install`.

5. Run the application
- Run the following command to start the application: `php artisan serve`.
**Visit** `http://localhost:8000` in your browser.

6. For Login Credentials
- Useremail: admin@student.com
- Password: admin@123
if the credentials not working 
Run the command in terminal: php artisan db:seed

7. ## API Endpoints

1. **GET `/api/students`**: Retrieve all students (paginated).
2. **POST `/api/students`**: Add a new student.
You can use thunder client vs code extension to test the api

8. Example API usage with `curl`:
```bash
 ## Get students
curl http://localhost:8000/api/students

## Add a student
curl -X POST http://localhost:8000/api/students \
    -H "Content-Type: application/json" \
    -d '{"name":"test","email":"test@example.com","class":"Class A"}'