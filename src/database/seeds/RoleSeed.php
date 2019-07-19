<?php
namespace Pilabrem\LaravelPermissionUI\database\seeds;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Super Admin
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        // Admin Simple
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
        $role->revokePermissionTo('gerer administrateurs');

        // Vérification
        $role = Role::create(['name' => 'verification']);
        $role->givePermissionTo('afficher donnees');
        $role->givePermissionTo('verifier demandes');

        // Analyse
        $role = Role::create(['name' => 'analyse']);
        $role->givePermissionTo('afficher donnees');
        $role->givePermissionTo('analyser demandes');

        // Validation
        $role = Role::create(['name' => 'validation']);
        $role->givePermissionTo('afficher donnees');
        $role->givePermissionTo('valider demandes');
    }
}
