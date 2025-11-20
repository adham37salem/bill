# ⚡ Electricity Bill Management System

A modern, scalable **Electricity Billing & Meter Management System** built using:

- **Laravel** – Backend framework  
- **Livewire** – Reactive components  
- **Filament** – Admin panel, CRUD, tables, forms  
- **TailwindCSS** – UI styling  

The system manages smart electricity meters via **IoT networks**, processes automatic meter readings from API endpoints, generates **monthly billing**, and supports both **on-site payments** and **online payment via PayPal**.

---

## 📚 Table of Contents

1. [Features](#-features)  
2. [System Architecture](#-system-architecture)  
3. [Installation](#-installation)  
4. [IoT API Documentation](#-iot-api-documentation)  
5. [Payment Module](#-payment-module)  
6. [Reporting](#-reporting)  
7. [Project Structure](#-project-structure)  
8. [Security](#-security)  
9. [Roadmap](#-roadmap)  
10. [Contributing](#-contributing)  
11. [License](#-license)

---

## 🚀 Features

### 🔌 1. IoT-Based Meter Management
- Register and manage smart meters  
- Unique meter IDs connected to IoT network  
- API endpoint receives real-time readings  
- Supports manual fallback readings  

### 📡 2. Automated Meter Reading API
- IoT devices send periodic readings  
- Laravel API validates meter & reading  
- Records stored securely for billing  
- Supports high-frequency data  

### 📆 3. Monthly Billing System
- Auto-generates monthly electricity bills  
- Calculates consumption & costs  
- Applies tariff, taxes, and service fees  
- Sends email/SMS notifications (optional)  

### 💳 4. Payment Module
- **On-site cash payments** (admin/staff marks as paid)  
- **Online payments via PayPal**  
- Payment history & invoice tracking  
- PDF receipt generation  

### 👥 5. Subscriber Management
- Subscriber registration module  
- Link subscribers with meters  
- View consumption history  
- View billing and payment history  

### 🛠 6. Admin Panel (FilamentPHP)
- Fully dynamic dashboard  
- CRUD for subscribers, meters, bills, tariffs, payments  
- Data tables with filtering, sorting & export  
- Role-based permissions  
- Real-time UI powered by Livewire  

---

## 🏗 System Architecture

### **Backend:** Laravel 10+  
Handles business logic, billing, authentication, payments, and API processing.

### **Frontend:** Livewire + TailwindCSS  
Used for real-time dashboards, forms, and subscriber portal.

### **Admin Panel:** FilamentPHP  
Provides CRUD operations and reporting tools.

### **IoT Integration:**  
IoT meters POST reading data into:

