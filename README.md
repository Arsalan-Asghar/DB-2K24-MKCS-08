# Form Project

## Setup Instructions

1. Copy the entire folder to your XAMPP `htdocs` directory.
2. Create a MySQL database named `form_db`.
3. Import the file `form_db.sql` into the `form_db` database.
4. In `submit.php` and `view.php`, set:
   ```php
   $username = "webuser";
   $password = "";  # Use empty password for XAMPP
