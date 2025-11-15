---

# **DB-2K24-MKCS-08 — Form Project**

This project contains an **HTML form**, **PHP backend**, and a **MySQL database**.
It is designed to run locally on your system using **XAMPP**.

---

## **🔧 Setup Instructions (XAMPP)**

### **1. Copy the Project**

Copy the entire folder into your XAMPP `htdocs` directory:

```
C:\xampp\htdocs\DB-2K24-MKCS-08\
```

---

### **2. Start XAMPP Services**

Open **XAMPP Control Panel** and start:

* **Apache**
* **MySQL**

Both services should turn **green**.

---

### **3. Create the Database**

1. Open your browser and go to:

```
http://localhost/phpmyadmin
```

2. Click **Databases** → create a new database:

```
form_db
```

3. Go to **Import** and select the SQL export file:

```
form_db.sql
```

Database setup is now complete ✅

---

### **4. Configure PHP Files**

Open the PHP files:

* `submit.php`
* `view.php`

Update the database credentials to match XAMPP defaults:

```php
$servername = "localhost";
$username = "root";    // default for XAMPP
$password = "";        // empty password in XAMPP
$dbname = "form_db";
```

---

### **5. Run the Project**

Open your browser and visit:

```
http://localhost/DB-2K24-MKCS-08/index.html
```

* Fill out the form → data is saved to the database.
* To view data, visit:

```
http://localhost/DB-2K24-MKCS-08/view.php
```

---

### **✔ Notes**

* No external hosting is needed.
* Works fully offline in XAMPP.
* Tested with **Apache**, **PHP**, and **MySQL**.
* SQL export is included.

---

### **👨‍🎓 Submitted By**

**Arsalan Asghar (08)**
DB-2K24-MKCS-08

---
