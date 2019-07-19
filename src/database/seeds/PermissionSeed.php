<?php
namespace Pilabrem\LaravelPermissionUI\database\seeds;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Artisan;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'gerer utilisateurs']);
        Permission::create(['name' => 'gerer administrateurs']);

        Permission::create(['name' => 'afficher donnees']);
        Permission::create(['name' => 'modifier donnees']);
        Permission::create(['name' => 'supprimer donnees']);
    }
}
