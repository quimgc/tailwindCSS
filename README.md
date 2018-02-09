# FRAMEWORK PER A CSS

https://tailwindcss.com

## Requirements
    
    sudo add-apt-repository ppa:ondrej/php
    sudo apt-get update
    sudo apt-get install php7.1 php7.1-mbstring php7.1-zip php7.1-xml php7.1-mcrypt php7.1-sqlite3 php7.1-mysql

## Install (with laravel version 5.5)

    
    composer create-project "laravel/laravel=5.5.*" tailwindCSS
    cd tailwindCSS
    composer require laravel-frontend-presets/tailwindcss
    php artisan preset tailwindcss
    npm install && npm run watch
    
    
 

