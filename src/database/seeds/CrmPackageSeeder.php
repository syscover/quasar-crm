<?php

use Illuminate\Database\Seeder;
use Quasar\Admin\Models\Package;

class CmsPackageSeeder extends Seeder
{
    public function run()
    {
        Package::insert([
            ['id' => 210, 'uuid' => 'c5f44c96-3fcb-4d63-b973-598f103b6e14', 'name' => 'Crm', 'root' => 'crm', 'sort' => 210, 'is_active' => 1],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CmsPackageSeeder"
 */
