# Project Management Website

Welcome to the GitHub repository for the Project Management Website, a web application developed using HTML, CSS, and JavaScript for the frontend, and PHP, MySQL, and phpMyAdmin for the backend. This project aims to provide a user-friendly interface for managing and tracking various aspects of projects.

## Features

- **Task Management:** Organize and track tasks for different projects.
- **User Authentication:** Secure login and registration system for user access.
- **Project Overview:** View a detailed overview of each project's progress and status.
- **Database Integration:** Utilizes MySQL database through phpMyAdmin for data storage.

## Getting Started

Follow these steps to set up and run the Project Management Website on your local environment:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your-username/project-management-website.git
   ```

2. **Set up the Database:**
   - Import the provided SQL file (`database.sql`) into your MySQL database using phpMyAdmin.
   - Update the `config.php` file with your MySQL database credentials.

3. **Open the Web Application:**
   Open the `index.html` file in your preferred web browser to access the Project Management Website.

4. **Explore the Code:**
   Review the HTML, CSS, and JavaScript code in the `index.html`, `styles.css`, and `script.js` files to understand the frontend implementation.

5. **Explore the Backend:**
   Review the PHP code in the `api` directory to understand the backend logic and how it interacts with the MySQL database.

6. **Run the PHP Server:**
   If needed, set up a PHP server to handle the backend requests. You can use tools like XAMPP or MAMP for this purpose.

7. **User Authentication:**
   Register a new user or use the provided credentials to log in and explore the project management features.

## Usage Example

```javascript
// Sample code demonstrating AJAX request to fetch project data
const projectId = 1;

fetch(`api/get_project.php?project_id=${projectId}`)
  .then(response => response.json())
  .then(data => {
    console.log("Project Data:", data);
    // Process and display project data as needed
  })
  .catch(error => console.error("Error fetching project data:", error));
```

Feel free to explore the provided sample code in the JavaScript file to understand how frontend functionalities interact with the backend.



Thank you for using the Project Management Website. Happy managing!
