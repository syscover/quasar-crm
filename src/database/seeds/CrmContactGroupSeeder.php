<?php

use Illuminate\Database\Seeder;
use Quasar\Crm\Models\ContactGroup;

class CrmContactGroupSeeder extends Seeder
{
    public function run()
    {
        ContactGroup::insert([
            ['uuid' => '5a167c26-e692-4714-ad9d-438eff88829b',      'name' => 'Cliente'],
            ['uuid' => '34962be7-3daa-478f-98bf-230a10c89144',      'name' => 'Proveedor'],
            ['uuid' => '4f0c81ac-992b-43ff-9634-c44dc8075db2',      'name' => 'Oportunidad'],
            ['uuid' => 'c9dfa98f-5203-4b80-9163-dc2d21cd077c',      'name' => 'Deudor'],
            ['uuid' => '0f039446-1589-480e-8d2a-a85cbd6243ee',      'name' => 'Acreedor']
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CrmContactGroupSeeder"
 */
