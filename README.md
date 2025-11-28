## 📦 Laravel Product Catalog - MVC Project

# 📋 Features Implemented

1. MVC Architecture

 - Models: Product model using Eloquent ORM to interact with the database.

 - Views: Dynamic Blade templates styled with Bootstrap 5.

 - Controllers: ProductController handling all business logic and request validation.

2. Database & ORM

 - Migrations: Database schema defined via PHP migrations (id, name, description, price, stock).

 - Eloquent: Used for all database queries (no raw SQL used).

3. Functionality

    ✅ Create: Add new products with validation rules (Name required, Price numeric).

    ✅ Read: View paginated list of products and detailed single-product views.

    ✅ Update: Edit existing product details.

    ✅ Delete: Remove products with a JavaScript confirmation popup to prevent accidents.

# ⚙ Prerequisites

Before running this project, ensure you have the following installed. This are my versions:

 - PHP 8.3.26 (Included in Laragon).

 - MySQL 8.4.3 Database (Included in Laragon).

 - Laragon local server environment. Donwload at: https://laragon.org/download

 - HeidiSQL for database management (Included in Laragon).

 - Git: For version control.

 - Also it uses Bootstrap 5 for better UI.

 - Composer 2.8.4

 - Laravel 12.40.2

# 🚀 Installation Steps

1. First we have to install Laragon on our PC.

2. Start Laragon services (this includes PHP and MySQL (in this case, HeidySQL)
<img width="958" height="655" alt="Captura de pantalla 2025-11-27 215824" src="https://github.com/user-attachments/assets/cae68132-e075-4404-9a1a-3d33639036ea" />

3. Then, go the GitHub page where the project is located: https://github.com/Paula5123/deber2

4. Download the project as .zip or clone it. You have to place the new project in the following route.
<img width="328" height="53" alt="Captura de pantalla 2025-11-27 220229" src="https://github.com/user-attachments/assets/f98d8232-c1c6-4ccc-ad87-4d74ad2cc967" />

5. Open your terminal in Laragon and go into the project directory. In my case it is C:\laragon\www\deber2. It might be deber2-main depending on how you imported the project.
<img width="381" height="52" alt="Captura de pantalla 2025-11-28 004117" src="https://github.com/user-attachments/assets/6ecacea1-b702-476a-89d7-6dd726214460" />

6. You got to make a copy of the .env.example and rename the copy as .env so Laravel knows which DB to create and/or use

7. Once imported the project, run
    - composer install
    - php artisan migrate
    - php artisan serve
  
8. Try de app!!

THE END!


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
