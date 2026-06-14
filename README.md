# ✈️ Tour and Travel Management System

A full-stack web-based Tour and Travel Management System developed using **PHP, MySQL, HTML, CSS, and JavaScript**. The system allows users to browse travel packages, book tours, generate receipts, and track booking status, while administrators can manage bookings, users, and customer inquiries through a dedicated dashboard.

---

## 📌 Features

### 👤 User Module
- User Registration
- User Login & Logout
- Browse Travel Packages
- Dynamic Tour Booking
- Hotel Selection
- Transport Selection
- Activity Selection
- Dynamic Price Calculation
- Booking Confirmation
- Receipt Generation
- User Dashboard
- Booking History Tracking

### 🛠️ Admin Module
- Admin Login
- Admin Dashboard
- View Registered Users
- Manage Bookings
- Approve Bookings
- Reject Bookings
- View Contact Messages
- System Statistics

### 💰 Dynamic Pricing
Price is automatically calculated based on:
- Selected Package
- Hotel Type
- Transport Type
- Activities Selected

---

## 🏗️ System Architecture

```
User/Admin
     │
     ▼
Frontend (HTML, CSS, JavaScript)
     │
     ▼
PHP Backend
     │
     ▼
MySQL Database
```

---

## 🛠️ Technologies Used

### Frontend
- HTML5
- CSS3
- JavaScript

### Backend
- PHP

### Database
- MySQL

### Tools
- XAMPP
- phpMyAdmin
- Visual Studio Code

---

## 📂 Project Structure

```text
Tour-Project-main/
│
├── index.php
├── login_register.php
├── login_process.php
├── register_process.php
├── logout.php
│
├── package_details.php
├── booking.php
├── book_tour.php
├── confirmation.php
├── receipt.php
│
├── user_dashboard.php
├── my_bookings.php
├── profile.php
│
├── admin_login.php
├── admin_dashboard.php
├── admin_bookings.php
├── admin_users.php
├── admin_contacts.php
├── update_booking.php
├── admin_logout.php
│
├── contact_us.php
├── db.php
│
├── css/
├── js/
├── images/
└── README.md
```

---

## 🗄️ Database Schema

### Users Table

| Field | Type |
|---------|---------|
| id | INT |
| fullname | VARCHAR |
| email | VARCHAR |
| password | VARCHAR |

### Admin Table

| Field | Type |
|---------|---------|
| id | INT |
| username | VARCHAR |
| password | VARCHAR |

### Bookings Table

| Field | Type |
|---------|---------|
| id | INT |
| package_name | VARCHAR |
| customer_name | VARCHAR |
| email | VARCHAR |
| phone | VARCHAR |
| persons | INT |
| travel_date | DATE |
| hotel_type | VARCHAR |
| transport_type | VARCHAR |
| activities | TEXT |
| total_amount | INT |
| booking_status | VARCHAR |

### Contact Table

| Field | Type |
|---------|---------|
| id | INT |
| name | VARCHAR |
| email | VARCHAR |
| subject | VARCHAR |
| message | TEXT |

---

## 🚀 Installation Guide

### Step 1
Install XAMPP.

### Step 2
Copy the project folder to:

```text
xampp/htdocs/
```

### Step 3
Start:
- Apache
- MySQL

### Step 4
Create a database:

```sql
CREATE DATABASE tour_management;
```

### Step 5
Import database tables.

### Step 6
Configure database connection in:

```php
db.php
```

Example:

```php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "tour_management"
);
```

### Step 7
Run the project:

```text
http://localhost/Tour-Project-main
```

---

## 🔐 Security Features

- User Authentication
- Admin Authentication
- Session Management
- Access Control
- Database Integration
- Password Protection
- Protected Dashboards

---

## 📸 Screenshots

### Home Page
(Add Screenshot)

### Login/Register Page
(Add Screenshot)

### Booking Page
(Add Screenshot)

### Confirmation Page
(Add Screenshot)

### Receipt Page
(Add Screenshot)

### User Dashboard
(Add Screenshot)

### Admin Dashboard
(Add Screenshot)

---

## 🧪 Testing

The following modules were tested:

- User Registration
- User Login
- Tour Booking
- Dynamic Pricing
- Confirmation Generation
- Receipt Generation
- User Dashboard
- Admin Dashboard
- Booking Approval/Rejection

All test cases passed successfully.

---

## 🎯 Future Scope

- Online Payment Gateway
- Email Notifications
- SMS Alerts
- Mobile Application
- Hotel API Integration
- Flight Booking API
- AI-Based Travel Recommendations
- Real-Time Tracking

---

## 📖 Project Objective

The objective of this project is to provide an efficient, secure, and user-friendly platform for online travel booking and management while reducing manual effort and improving customer experience.

---

## 👨‍💻 Developed By

**Gandharv Sood**

B.Tech Computer Science & Engineering

Tour and Travel Management System Project

---

## 📄 License

This project is developed for academic and educational purposes.
