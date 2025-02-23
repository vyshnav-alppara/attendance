# Attendance Based on Email & Phone

Retrieves attendance data based on an email or phone
number.

## Documentation

### Tech Stack

- Laravel 11
- PHP 8
- Bootstrap 5

## Installation

```bash
  git clone https://github.com/vyshnav-alppara/attendance.git
  composer update

  cp .env.example .env
  Change Database Credentials

  php atisan migrate:fresh --seed
  (this command will seed demo data to internal,external user tables and attendance table)
  npm run dev
  php artisan serve

  Done :)

  use 'vyshnav@vyshnav.com' as email and 'password' as password to login
```

## Screenshots

### Login Screen

![App Screenshot](https://github.com/vyshnav-alppara/attendance/blob/main/screenshots/login.png?raw=true)

### Search Screen using email

![App Screenshot](https://github.com/vyshnav-alppara/attendance/blob/main/screenshots/searchpage.png?raw=true)

### Search Screen Using Phone Number

![App Screenshot](https://github.com/vyshnav-alppara/attendance/blob/main/screenshots/search_phone.png?raw=true)
