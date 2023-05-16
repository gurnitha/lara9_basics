# BELAJAR BASICS LARAVEL FRAMEWORK DENGAN MEMBUAT SEBUAH PROYEK 'PERSONAL PORTFOLIO'


## 1. Apa yang akan kita buat

## 2. Prasyarat

## 3. Membuat proyek

        Aktivitas:

        1. Membuat proyek
        > composer create-project laravel/laravel="9.*.*" lara9_basics

        new file:   .editorconfig
        new file:   .env.example
        new file:   .gitattributes
        new file:   .gitignore
        new file:   README.md
        new file:   app/Console/Kernel.php
        new file:   app/Exceptions/Handler.php
        ...
        new file:   tests/TestCase.php
        new file:   tests/Unit/ExampleTest.php
        new file:   vite.config.js


#### 3.1 Membuat basics routes

        Aktivitas:

        1. Membuat basics routes untuk about dan contact pages

        modified:   README.md
        modified:   routes/web.php


#### 3.2 Returning laman about dan contact dari view

        Aktivitas:

        1. Membuat laman about dan contact serta return them from view

        modified:   README.md
        new file:   resources/views/about.blade.php
        new file:   resources/views/contact.blade.php
        new file:   resources/views/start.html
        modified:   routes/web.php


#### 3.3 Blade syntax

        Aktivitas:

        1. Latihan menggunakan sintax blade

        modified:   README.md
        new file:   resources/views/using_blade_syntax.blade.php
        modified:   routes/web.php


#### 3.4 Membuat controller

        Aktivitas:

        1. REM  :: Membuat DemoController di dalam folder Demo

        E:\workspace\laragon\www\ka_lara9_basics\lara9_basics (main)
        λ REM  :: Membuat DemoController di dalam folder Demo

        E:\workspace\laragon\www\ka_lara9_basics\lara9_basics (main)
        λ php artisan make:controller Demo/DemoController

           INFO  Controller [E:\workspace\laragon\www\ka_lara9_basics\lara9_basics\app/Http/Controllers/Demo/DemoController.php] created successfully.

        modified:   README.md
        new file:   app/Http/Controllers/Demo/DemoController.php


#### 3.4 Creating methods in the controller

        Aktivitas:

        1. Membuat Home, About dan Contact method di dalam DemoContnroller

        modified:   README.md
        modified:   app/Http/Controllers/Demo/DemoController.php
        modified:   routes/web.php


#### 3.5 Kombinasi Controller dan Route

        Aktivitas:

        1. Membuat routes untuk laman Home, About dan Contact

        modified:   README.md
        new file:   public/images/1_routes_contrller.jpg
        new file:   resources/views/index.blade.php
        modified:   routes/web.php


#### 3.6 Membuat Group routes

        Aktivitas:

        1. Membuat group route pada route

        modified:   README.md
        new file:   public/images/2_grouping_the_route.jpg
        modified:   resources/views/about.blade.php
        modified:   routes/web.php


#### 3.7 Linking the pages

        Aktivitas:

        1. Membuat anker tags

        modified:   README.md
        new file:   public/images/3_linking_the_pages.jpg
        modified:   resources/views/about.blade.php
        modified:   resources/views/contact.blade.php
        modified:   resources/views/index.blade.php
        modified:   routes/web.php


#### 3.8 MIDDLEWARE - Membuat middleware

        Aktivitas:

        1. Membuat CheckAge middleware
        2. Register middleware pada Kernel.php

        E:\workspace\laragon\www\ka_lara9_basics\lara9_basics (main)
        λ php artisan make:middleware CheckAge

           INFO  Middleware [E:\workspace\laragon\www\ka_lara9_basics\lara9_basics\app/Http/Middleware/CheckAge.php] created successfully.

        modified:   README.md
        modified:   app/Http/Kernel.php
        new file:   app/Http/Middleware/CheckAge.php



#### 3.9 MIDDLEWARE - Melindungi laman website

        Aktivitas:

        1. Melindungi laman about dari user berusia <=20
        2. Tapi bila usia >20 user masih bisa meng-akses
           laman about dengan cara

           http://127.0.0.1:8000/about?check=21

        modified:   README.md
        modified:   app/Http/Middleware/CheckAge.php
        new file:   public/images/4.1_protecting_about_page_using_middleware.jpg
        new file:   public/images/4_protecting_about_page_using_middleware.jpg
        modified:   resources/views/contact.blade.php
        modified:   routes/web.php
        
