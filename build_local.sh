#!/bin/bash
# Step 1: Install Composer dependencies
echo "Installing Composer dependencies..."
composer install

# Step 2: Install NPM dependencies
echo "Installing NPM dependencies..."
npm install

# Step 3: Run migrations 
# echo "Running migrations..."
# php artisan migrate --seed

# Step 4: Generate application key
echo "Generating application key..."
php artisan key:generate

# Step 5: Clear cache
echo "Clearing cache..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Step 6: Start the local server
echo "Starting the local server..."
php artisan serve &

# Optional: Tail the log file if you want to see logs in real-time
echo "Tailing logs..."
tail -f storage/logs/laravel.log
