DB-2K24-MKCS-08 — Form Project

This project contains an HTML form, PHP backend, and a MySQL database.
Your system (XAMPP) will run everything locally.

🔧 How to Run the Project (XAMPP Instructions)
1. Copy the project

Copy the whole project folder into:

C:\xampp\htdocs\


So the path becomes:

C:\xampp\htdocs\DB-2K24-MKCS-08\

2. Start XAMPP Services

Open XAMPP Control Panel and start:

Apache

MySQL

Both must turn green.

3. Create the Database

Open your browser
Go to:

http://localhost/phpmyadmin


Click Databases → create a new database named:

form_db


Go to Import

Import the file:

form_db.sql


Database setup is done.

4. Update PHP Files for XAMPP

Open both:

submit.php

view.php

Set these values:

$servername = "localhost";
$username = "root";   // default for XAMPP
$password = "";       // empty password in XAMPP
$database = "form_db";

5. Run the Project

Visit:

http://localhost/DB-2K24-MKCS-08/index.html


Fill the form → it will save data into MySQL.

Visit:

http://localhost/DB-2K24-MKCS-08/view.php


to see submitted data.

✔ Notes

No external hosting needed.

Works fully offline once placed in htdocs.

Tested with Apache, PHP, and MySQL.

SQL export included.

👨‍🎓 Submitted By

Arsalan Asghar (08)
DB-2K24-MKCS-08
