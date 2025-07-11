# College Management System

The **College Management System** is a sophisticated digital platform designed to meet the specific needs of educational institutions. It integrates four distinct panels—**Student**, **Teacher**, **Admin**, and **Parent**—each offering unique functionalities to streamline operations, enhance communication, and foster collaboration among stakeholders in the school community.


### Student Panel 

The **Student Panel** provides students with access to essential academic and personal information. Key features include:

- **Personal Dashboard**: View personal details, academic records, timetable, and upcoming assignments.
- **Attendance Tracking**: Check attendance records and receive notifications for absences.
- **Gradebook**: Access grades for assessments, exams, and overall academic performance.
- **Assignments and Homework**: Submit assignments online, view deadlines, and receive feedback from teachers.
- **Announcements**: Stay updated with school announcements, events, and important notices.

### Teacher Panel

The **Teacher Panel** empowers educators with tools for efficient classroom management and student assessment. Key features include:

- **Class Management**: Create and manage class schedules, attendance, and seating arrangements.
- **Grade Management**: Enter and update grades, generate progress reports, and analyze student performance.
- **Assignment Management**: Assign and distribute homework, projects, and assessments electronically.
- **Communication**: Communicate with students and parents through messaging and announcements.
- **Resource Sharing**: Share educational resources, lesson plans, and supplementary materials.

### Admin Panel

The **Admin Panel** serves as the backbone of the system, providing comprehensive oversight and administrative control. Key features include:

- **User Management**: Manage user accounts, roles, permissions, and access levels.
- **Data Management**: Maintain student records, academic calendars, and institutional data.
- **Finance Management**: Monitor fee payments, generate invoices, and track financial transactions.
- **Report Generation**: Generate and analyze various reports on attendance, academic performance, and administrative metrics.
- **System Configuration**: Configure system settings, customize workflows, and manage integrations.

### Parent Panel

The **Parent Panel** enables parents and guardians to actively participate in their child’s education and stay informed about their progress. Key features include:

- **Student Progress**: View academic grades, attendance records, and performance reports.
- **Communication**: Communicate with teachers and school administration through messaging and notifications.
- **Attendance Notifications**: Receive real-time updates on student attendance and absences.
- **Fee Management**: View fee schedules, make online payments, and track payment history.
- **Calendar and Events**: Access school calendars, upcoming events, and important dates.

  
## How it Works

The **College Management System** facilitates seamless collaboration and communication among students, teachers, administrators, and parents, enhancing efficiency, transparency, and overall educational outcomes within the institution.


## Technologies Used

*   **Backend:** PHP
*   **Database:** MySQL (or MariaDB)
*   **Frontend:** HTML, CSS, JavaScript
*   **Framework/Libraries:**
    *   AdminLTE v3.x (for admin panel UI)
    *   jQuery
    *   DataTables (for tabular data display)
    *   Select2 (for enhanced select boxes)
    *   Font Awesome (for icons)
    *   Bootstrap (underlying framework for AdminLTE)
      
## Installation

To set up the **College Management System** using **XAMPP**, follow the steps below:

### 1. Install XAMPP

**XAMPP** is a free and open-source cross-platform web server solution stack package. It includes Apache, MySQL, PHP, and Perl.

#### Step-by-Step Installation of XAMPP:

1. **Download XAMPP**:
   - Go to the [XAMPP official website](https://www.apachefriends.org/download.html).
   - Select the version suitable for your operating system (Windows, macOS, or Linux).

2. **Install XAMPP**:
   - Run the downloaded installer.
   - Follow the on-screen instructions to install XAMPP.
   - Once installed, open the **XAMPP Control Panel**.

3. **Start Apache and MySQL**:
   - Open the **XAMPP Control Panel**.
   - Start the **Apache** and **MySQL** services by clicking the `Start` button next to each.

### 2. Create Project Folder in `htdocs`

The `htdocs` folder is the root directory where your web projects will reside in XAMPP.

#### Steps to create the project folder:

1. **Navigate to the `htdocs` directory**:
   - Open the **XAMPP installation directory** (usually `C:\xampp` on Windows).
   - Locate and open the `htdocs` folder (`C:\xampp\htdocs`).

2. **Create your project folder**:
   - Inside the `htdocs` folder, create a new directory for your project:
     ```bash
     mkdir cms-project
     ```
   - You can name your project folder whatever you like, but in this case, we’ll use `sms-project`.

3. **Place your project files**:
   - Copy your **College Management System** project files into the `cms-project` folder.
### 3. Clone the Repository into the Project Folder

1. **Navigate to the project folder**:
   ```bash
   cd C:\xampp\htdocs\cms-project
3. **Clone the repository:**

   ```bash
   git clone https://github.com/yourusername/college-management-system.git .
  
### 4. Set up the Database 

If your project uses MySQL, you need to configure the database.
### Steps

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/your-repository-name.git
    cd your-repository-name
    ```
    (Replace `your-username` and `your-repository-name` with your actual GitHub details)

2.  **Set up the database:**
    *   Create a new MySQL database (e.g., `college_cms`).
    *   Import the database schema. You'll need to create this from your project's structure. (A `database.sql` file is usually included for this. If you don't have one, you'll need to generate it from your existing database or manually create tables based on your PHP code.)
    *   **Example tables based on your code:**
        *   `accounts` (id, name, email, password, type)
        *   `usermeta` (user_id, meta_key, meta_value)
        *   `posts` (id, author, title, description, type, status, publish_date, parent) - used for classes, sections, subjects, periods, study materials, payments
        *   `metadata` (item_id, meta_key, meta_value) - used for post meta (e.g., class sections, timetable details, study material details, payment details)
        *   `courses` (id, name, category, duration, image, date)
        *   `attendance` (attendance_month, attendance_value, std_id, current_session)

3.  **Configure database connection:**
    *   Locate `includes/config.php` (or similar file) and update the database connection details (database name, username, password, host).
    *   Example (assuming `includes/config.php`):
        ```php
        <?php
        $db_host = 'localhost';
        $db_user = 'root'; // Your database username
        $db_pass = '';     // Your database password
        $db_name = 'college_cms'; // Your database name

        $db_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        if (!$db_conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // Other configurations like session_start(), functions.php include etc.
        session_start();
        include('functions.php');
        ?>
        ```

4.  **Place project files on your web server:**
    *   Copy the entire project directory to your web server's document root (e.g., `htdocs` for Apache, `www` for Nginx).

5.  **Configure web server (if necessary):**
    *   Ensure your web server is configured to serve PHP files.

6.  **Access the application:**
    *   Open your web browser and navigate to `http://localhost/your-project-folder/login.php` (replace `your-project-folder` with the actual folder name).


- **Student Panel:**  
  `http://localhost/cms-project/student`

- **Teacher Panel:**  
  `http://localhost/cms-project/teacher`

- **Admin Panel:**  
  `http://localhost/cms-project/admin`

- **Parent Panel:**  
  `http://localhost/cms-project/parent`

## Test Credentials
**Login URL:** `http://localhost/cms-project/login.php`
- #### Admin Panel
  
  - **Username:** `admin@example.com`  
  - **Password:** `admin@cms`
