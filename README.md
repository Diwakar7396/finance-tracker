# 💰 Finance Tracker (Full Stack Project)

A simple and powerful **Finance Tracking Web Application** that helps users manage loans, repayments, and track remaining balances with interest.

---

## 🚀 Features

* ➕ Add client transactions (amount given, paid, interest, date)
* 👤 View all clients
* 📊 Click a client to see:

  * Total amount given
  * Total amount paid
  * Remaining balance
* 💾 Data stored in backend (PHP + JSON)
* 🎨 Modern and responsive UI (React)

---

## 🛠️ Tech Stack

### Frontend

* React.js
* HTML
* CSS

### Backend

* PHP
* JSON (for data storage)

---

## 📁 Project Structure

```
finance-tracker/
│
├── backend/
│   ├── add.php
│   ├── getClients.php
│   ├── getClient.php
│   ├── data.json
│
└── frontend/
    ├── src/
    │   ├── App.js
    │   ├── App.css
```

---

## ⚙️ Setup Instructions

### 1️⃣ Clone the repository

```
git clone https://github.com/your-username/finance-tracker.git
cd finance-tracker
```

---

### 2️⃣ Backend Setup (PHP)

#### Option 1: Using PHP built-in server

```
cd backend
php -S localhost:8000
```

---

#### Option 2: Using XAMPP

* Install XAMPP
* Move backend folder to:

```
C:\xampp\htdocs\
```

* Start Apache
* Backend runs at:

```
http://localhost/backend
```

---

### 3️⃣ Frontend Setup (React)

```
cd frontend
npm install
npm start
```

---

## 🔗 API Endpoints

| Method | Endpoint                | Description        |
| ------ | ----------------------- | ------------------ |
| POST   | /add.php                | Add transaction    |
| GET    | /getClients.php         | Get all clients    |
| GET    | /getClient.php?name=XYZ | Get client details |

---

## 📸 Screenshots

*Add screenshots of your UI here (optional but recommended)*

---

## 💡 Future Improvements

* 💾 MySQL database integration
* 🔐 User authentication
* 📊 Dashboard with charts
* 📱 Mobile responsive design
* 🔍 Search and filter clients

---

## 🙌 Author

* Your Name

---

## ⭐ If you like this project

Give it a ⭐ on GitHub!

