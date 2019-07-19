# Laravel permission ui
This package can be used with admin-lte template

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

### Edit App\User model and add
    <?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Spatie\Permission\Traits\HasRoles;      // New line usage

    class User extends Authenticatable
    {
        use Notifiable;
        use HasRoles;          // New line

        ...
    }

### Seed Default datas with super-admin
    php artisan db:seed --class=Pilabrem\\LaravelPermissionUI\\database\\seeds\\DatabaseSeeder

#### Super admin credentials
- Email: admin@admin.com
- Password: password

### Include permissions Menu item (li of first level ul) in your menu side bar
    @include('admin.menu')
