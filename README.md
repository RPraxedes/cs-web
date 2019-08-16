# Prereqs:

> Laravel

> Composer

> XAMPP (or just PHP and MySQL)

# Installation:
0. Run XAMPP's MySQL and Apache Server (optional).

1. open cmd with this folder as directory (e.g C:\xampp\htdocs\cs-web)

2. run 'composer install' to download and install the composer packages used in this project.

3. run 'php artisan migrate:fresh' to build the DB.

4. run 'php artisan db:seed' so DB has real entries.

5. copy '.env.example' contents and save to a file '.env' since renaming does not work properly.

6. run 'php artisan key:generate'.

7. run 'php artisan serve' to open the dev server.

# Admin Login:

> user: 'test@mail.com', pass: 'test'

> user: 'test1@mail.com', pass: 'test1' (not admin verified)

# Faculty Login:

> user: 'jmaddawe@up.edu.ph', pass: 'jmaddawe'

> The pattern is the same for the rest of the faculty (first_initial+middle_initial+last_full)
