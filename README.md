# My Laravel App

This is a Laravel application that includes a login and registration system. The application allows users to register, log in, and reset their passwords.

## Features

- User registration
- User login
- Password reset functionality
- Basic authentication

## Installation

1. Clone the repository:
   ```
   git clone <repository-url>
   ```

2. Navigate to the project directory:
   ```
   cd my-laravel-app
   ```

3. Install dependencies:
   ```
   composer install
   npm install
   ```

4. Set up your environment file:
   ```
   cp .env.example .env
   ```

5. Generate the application key:
   ```
   php artisan key:generate
   ```

6. Run migrations:
   ```
   php artisan migrate
   ```

7. Serve the application:
   ```
   php artisan serve
   ```

## Usage

- Visit `/register` to create a new account.
- Visit `/login` to access your account.
- Visit `/password/reset` to reset your password.

## License

This project is licensed under the MIT License.