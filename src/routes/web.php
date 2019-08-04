<?php
use Illuminate\Support\Facades\Route;

/**
 *      Gestion des permissions et des roles
 */
Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin', 'namespace' => 'Pilabrem\LaravelPermissionUI\Http\Controllers', 'as' => 'admin.'], function () {
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
});

// Change Password Routes...
Route::group(['middleware' => ['web'], 'namespace' => 'Pilabrem\LaravelPermissionUI\Http\Controllers'], function () {
    Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
    Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');
});
