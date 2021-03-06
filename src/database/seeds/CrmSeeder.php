<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CrmSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(CrmPackageSeeder::class);
        $this->call(CrmPermissionSeeder::class);
        $this->call(CrmResourceSeeder::class);
        $this->call(CrmPermissionsRolesSeeder::class);
        $this->call(CrmContactGroupSeeder::class);
                
        Model::reguard();
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CrmSeeder"
 */
