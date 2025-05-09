# Portfolio - JPB (2019)

This is my personal portfolio website created back in **2019** using **Laravel 7**. It was one of my first projects to showcase my skills, experiences, and projects online.

> ⚠️ This project is no longer maintained and serves as an archive of my early work.

## 🔧 Built With

- **Laravel 7**
- **HTML**, **CSS (SASS)**, **JavaScript**
- **Blade templating**
- **MySQL** (for data storage)
- **Laravel Mix** (for asset compilation)

## 🚀 How to Run

1. Clone the repository:
   ```bash
   git clone https://github.com/yjaphzs/portfolio2019.git

2. Set up a virtual host (e.g., in Apache, Laragon, or Valet) pointing to the project's /public folder. Make sure you're using PHP 7.4 for the server.

Example for Apache (add to httpd-vhosts.conf):

<VirtualHost *:80>
    DocumentRoot "C:/path/to/portfolio2019/public"
    ServerName portfolio.local
    <Directory "C:/path/to/portfolio2019/public">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
