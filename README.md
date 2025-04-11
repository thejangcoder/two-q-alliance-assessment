# 🚀 Two Q Alliance Sdn Bhd Preliminary Assessment - Laravel 11 Company Management System

A modern and lightweight **Laravel 11 CRUD app** with **authentication**, **Bootstrap 5 UI**, and **company management features**.

![Laravel](https://img.shields.io/badge/Laravel-11.x-red?logo=laravel)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.x-blue?logo=bootstrap)
![License](https://img.shields.io/badge/license-MIT-green)

---

## 🛠 Features

- ✅ Laravel 11 with clean folder structure
- ✅ Bootstrap 5 styling (replaces Tailwind)
- ✅ Auth system (login/logout)
- ✅ Company module (CRUD + logo upload)
- ✅ Validations with feedback
- ✅ Bootstrap Icons
- ✅ Pagination for company list
- ✅ User-friendly UI

---

## ⚙️ Installation

```bash
# Clone the repo
git clone https://github.com/thejangcoder/two-q-alliance-assessment.git
cd two-q-alliance-assessment

# Install dependencies
composer install
npm install && npm run dev

# Create .env and set up DB
cp .env.example .env
php artisan key:generate

# Configure DB in .env then run migrations
php artisan migrate --seed
