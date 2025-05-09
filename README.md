# 🧑‍💻 Jan Bautista's Portfolio (2019)

This is my personal portfolio website created back in **2019** using **Laravel 7**. It was one of my first projects to showcase my skills, experiences, and projects online.

> ⚠️ This project is no longer maintained and serves as an archive of my early work.

## 🔧 Built With

- **Laravel 7**
- **HTML**, **CSS (SASS)**, **JavaScript**
- **Blade templating**
- **MySQL** (for data storage)
- **Laravel Mix** (for asset compilation)

## 🚀 How to Run

```bash
git clone https://github.com/yjaphzs/portfolio2019.git
cd portfolio2019
composer install
cp .env.example .env
php artisan key:generate
# Set up your DB in .env
php artisan migrate
npm install && npm run dev
php artisan serve
