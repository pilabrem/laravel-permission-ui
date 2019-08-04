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

        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'manage administrators']);

        Permission::create(['name' => 'create datas']);
        Permission::create(['name' => 'display datas']);
        Permission::create(['name' => 'edit datas']);
        Permission::create(['name' => 'delete datas']);
    }
}
