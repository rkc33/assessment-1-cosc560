# Laravel 12 Basic Blog Application

This is a simple CRUD (Create, Read, Update, Delete) blog application built using Laravel 12. Users can create, edit, view, and delete blog posts using a clean and styled interface.

---

## Features

-   Create new blog posts
-   List all blog posts
-   Edit existing posts
-   View individual post details
-   Delete posts
-   Styled using simple HTML & CSS

---

## Getting Started

### Prerequisites

-   PHP >= 8.2
-   Composer
-   Laravel 12
-   MySQL

---

## Installation

```bash
# Clone the repository
git clone https://github.com/rkc33/assessment-1-cosc560.git
cd assessment-1-cosc560

# Install dependencies
composer install

# Copy and set up environment
cp .env.example .env
php artisan key:generate

# Create the database manually in MySQL if not already created:
# e.g., in MySQL CLI or phpMyAdmin:
# CREATE DATABASE blog_app;

# Run migrations and seeders
php artisan migrate --seed

# Start the development server
php artisan serve

```
