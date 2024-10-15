<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
    </a>
</p>

<p align="center">
    <a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Equation Symbol Solver

## About

**Equation Symbol Solver** is a Laravel-based application designed to solve equation symbols where letters are substituted with digits to satisfy a mathematical equation. Specifically, it solves the equation "HIER + GIBT + ES = NEUES."

## Features

- Solves equation symbols.
- Displays all valid solutions with their corresponding mappings.
- Comprehensive logging of attempts and solutions.

## Installation

### Option 1: Manual Setup

1. **Clone the repository:**
    ```bash
    git clone https://github.com/aommy05349/equation-symbol-solver.git
    cd equation-symbol-solver
    ```

2. **Create a `.env` file:**
    ```bash
    cp .env.example .env
    ```

3. **Install Composer dependencies:**
    ```bash
    composer install
    ```

4. **Install NPM dependencies:**
    ```bash
    npm install
    ```

5. **Generate the application key:**
    ```bash
    php artisan key:generate
    ```

6. **Run database migrations (optional):**
    ```bash
    php artisan migrate
    ```

7. **Start the application:**
    ```bash
    php artisan serve
    ```

### Option 2: Automated Setup with `build_local.sh`

1. **Clone the repository:**
    ```bash
    git clone https://github.com/aommy05349/equation-symbol-solver.git
    cd equation-symbol-solver
    ```

2. **Create a `.env` file:**
    ```bash
    cp .env.example .env
    ```

3. **Make the `build_local.sh` script executable:**
    ```bash
    chmod +x build_local.sh
    ```

4. **Run the script to set up the application:**
    ```bash
    ./build_local.sh
    ```

## Usage

The `build_local.sh` script automates the following steps:
- Installs Composer and NPM dependencies
- Optionally runs migrations (commented out by default)
- Generates the application key
- Clears the cache
- Starts the local server
- Tails the log file for real-time logs

To run the application manually:
```bash
php artisan serve
