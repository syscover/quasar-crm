<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CrmSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(CrmPackageSeeder::class);
                
        Model::reguard();
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CrmSeeder"
 */
