# ECom-Book-Store

A classic **PHP + MySQL eCommerce clone** focused on online book shopping, with cart, checkout flow, and admin management pages.

🌐 **Live Demo:** https://smr.wuaze.com/e-com-bookstore/  
📦 **Repository:** https://github.com/RRR-STAR/ECom-Book-Store

---

## 📌 Project Overview

**ECom-Book-Store** is a traditional server-rendered web application for browsing and purchasing books online.  
It follows a straightforward PHP architecture with database-driven content and session-based cart handling.

This project includes:

- Public storefront (home, books, publishers, cart, checkout)
- Book detail pages
- Purchase/checkout flow
- Basic admin panel for book/order operations
- SQL dump to initialize the project database

---

## 🧰 Tech Stack

Based on repository analysis:

- **Backend:** PHP (core application logic)
- **Frontend:** HTML, Bootstrap (UI styling/layout), static assets
- **Database:** MySQL / MariaDB
- **Server:** Apache HTTP Server
- **Local stack recommendation:** XAMPP / WAMP / MAMP / LAMP

Language composition:
- PHP: **96.1%**
- HTML: **3.1%**
- Other: **0.8%**

---

## 📁 Project Structure (high-level)

- `index.php` – landing page with latest books
- `books.php`, `book.php`, `bookPerPub.php` – catalog and detail views
- `cart.php`, `checkout.php`, `purchase.php` – cart and order flow
- `admin*.php`, `edit_*.php` – admin/order/book management
- `functions/` – helper and database utility functions
- `template/` – reusable layout sections
- `database/www_project.sql` – database schema + seed data
- `bootstrap/` – front-end assets (CSS/JS/images)

---

## ⚙️ Local Setup Guide (Apache + MySQL)

### 1) Prerequisites

Install any one local server stack:

- XAMPP (recommended for Windows beginners)
- WAMP
- MAMP
- LAMP

Make sure these services are running:

- **Apache**
- **MySQL** (or MariaDB)

---

### 2) Clone or download the repository

```bash
git clone https://github.com/RRR-STAR/ECom-Book-Store.git
```

Move the project into your Apache web root:

- XAMPP (Windows): `C:\xampp\htdocs\ECom-Book-Store`
- WAMP: `C:\wamp64\www\ECom-Book-Store`
- Linux Apache: `/var/www/html/ECom-Book-Store`

---

### 3) Create the database

Open phpMyAdmin (usually `http://localhost/phpmyadmin`) or MySQL CLI.

Create a database named:

```sql
CREATE DATABASE www_project;
```

> The SQL file starts with `USE www_project;`, so using this exact name avoids import issues.

---

### 4) Import SQL script

Import this file:

- `database/www_project.sql`

Using phpMyAdmin:
1. Select `www_project`
2. Click **Import**
3. Choose `database/www_project.sql`
4. Run import

This script creates tables (like `books`, `admin`, etc.) and inserts initial seed data.

---

### 5) Configure database connection

Check the DB config in the PHP database utility (likely under `functions/database_functions.php`) and confirm:

- host: `localhost`
- username: `root` (default in XAMPP)
- password: `` (empty by default in XAMPP unless changed)
- database: `www_project`

If your local MySQL password is set, update it in the config.

---

### 6) Run the project

Open in browser:

- `http://localhost/ECom-Book-Store/`

If Apache port is custom (e.g., 8080):

- `http://localhost:8080/ECom-Book-Store/`

---

## 🔐 Default Admin Note

The SQL dump includes an admin user in `admin` table:

- username: `admin`
- password: stored as SHA1 hash (`d033e22ae348aeb5660fc2140aec35850c4da997`)

If needed, reset/change admin credentials directly in DB for local testing.

---

## ✅ Troubleshooting

### Database connection error
- Verify MySQL service is running
- Confirm DB name is `www_project`
- Check credentials in DB config file

### Blank page / warnings
- Enable error reporting in PHP during local development
- Verify project path is inside Apache web root
- Confirm PHP version compatibility (project is older-style PHP; PHP 7.x is often smoother for legacy apps)

### Missing images/assets
- Ensure `bootstrap/` folder is present and not moved
- Keep folder structure unchanged

---

## 🚀 Suggested Improvements (optional)

If you want to modernize this project:

- Add `.env`-based configuration for DB credentials
- Use password hashing via `password_hash()` / `password_verify()`
- Add CSRF protection on forms
- Add input validation/sanitization on all request handlers
- Introduce routing + MVC cleanup
- Add README screenshots and API/data-flow docs

---

## 🙌 Acknowledgment

This project is a practical learning clone of a traditional online bookstore/eCommerce flow using PHP and MySQL, suitable for students and beginners learning full-stack web fundamentals.
