## installation
    composer require pilabrem/laravel-permission-ui

## Configuration

### Publish migrations
    php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"

### Migrate
    php artisan migrate

### Publish the config file
    php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"

### Publish views and lang files
    php artisan vendor:publish --provider="Pilabrem\LaravelPermissionUI\LaravelPermissionUiServiceProvider"

### Seed Default datas with super-admin
    php artisan db:seed --class=Pilabrem\\LaravelPermissionUI\\database\\seeds\\DatabaseSeeder

#### Super admin credentials
- Email: admin@admin.com
- Password: password
