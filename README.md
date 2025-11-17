🧑‍🎓 CRUD Application Using Laravel Eloquent ORM

This is a simple and beautifully designed Laravel CRUD application built using Eloquent ORM.
The project demonstrates how to create, read, update, and delete (CRUD) student records with server-side validation and modern UI styling using Bootstrap 4.

🚀 Features

✔️ Add New Students
✔️ View All Registered Students
✔️ Edit Student Information
✔️ Delete Students
✔️ Beautiful UI with Modern Card Design
✔️ Validation for All Fields
✔️ Clean & Organized Controller Structure
✔️ Fully Responsive Layout
✔️ Built using Laravel Best Practices

🖥️ Technologies Used
Layer	Technology
Backend	Laravel 10+, Eloquent ORM
Frontend	Blade Templates, Bootstrap 4
Database	MySQL
Styling	Custom CSS + Bootstrap
Server Requirements	PHP 8+, Composer
📂 Project Structure
crud-eloquent-orm/
│
├── app/
│   └── Http/
│       └── Controllers/
│           └── StudentController.php
│
├── resources/
│   └── views/
│       ├── home.blade.php
│       └── edit.blade.php
│
├── routes/
│   └── web.php
│
├── public/
│
└── README.md

🔧 Installation & Setup

Follow the steps below to run this project on localhost:

1️⃣ Clone the repository
git clone https://github.com/Sohailqureshi9/crud-eloquent-orm.git
cd crud-eloquent-orm

2️⃣ Install dependencies
composer install

3️⃣ Create environment file
cp .env.example .env

4️⃣ Generate application key
php artisan key:generate

5️⃣ Configure database in .env
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=

6️⃣ Run migrations
php artisan migrate

7️⃣ Start the app
php artisan serve


Open in browser:

👉 http://127.0.0.1:8000/

📸 Screenshots
🏠 Home Page – Add + List Students

<img width="1885" height="788" alt="image" src="https://github.com/user-attachments/assets/c3714f3f-7f01-418d-9f80-457946765263" />



✏️ Edit Page – Update Student Info

<img width="1894" height="793" alt="image" src="https://github.com/user-attachments/assets/93f81f15-4ace-45a2-9df5-8bffb1d5a36d" />


🧪 Validations Included

First Name (required)

Last Name (required)

Email (required, valid format, unique)

Date of Birth (required)

Phone Number (required)

Address (required)

Laravel’s validation ensures correct & clean data every time.

🧑‍💻 Author

Muhammad Sohail
Laravel Developer | IT Graduate
🔗 GitHub: Sohailqureshi9

📧 Email: sohailqureshii369@gmail.com
