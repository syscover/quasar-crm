<?php

use Illuminate\Database\Seeder;
use Quasar\Admin\Models\Permission;

class CrmPermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::insert([
            // crm
            ['uuid' => '2d1b8679-ef62-4f1d-a512-75574df2bfb1',  'name' => 'crm.access',                                 'package_uuid' => 'c5f44c96-3fcb-4d63-b973-598f103b6e14'],

            ['uuid' => 'dfcae907-4ad7-478f-915c-00fee4a3c8e5',  'name' => 'crm.contactGroup.access',                    'package_uuid' => 'c5f44c96-3fcb-4d63-b973-598f103b6e14'],
            ['uuid' => 'fb950a22-dda3-4c16-9dd5-8599a0f5aada',  'name' => 'crm.contactGroup.list',                      'package_uuid' => 'c5f44c96-3fcb-4d63-b973-598f103b6e14'],
            ['uuid' => '4bc513a7-33b4-425f-ac40-24a803c0bc78',  'name' => 'crm.contactGroup.create',                    'package_uuid' => 'c5f44c96-3fcb-4d63-b973-598f103b6e14'],
            ['uuid' => 'c76c9f00-435a-4c44-918d-be9c76c1c267',  'name' => 'crm.contactGroup.get',                       'package_uuid' => 'c5f44c96-3fcb-4d63-b973-598f103b6e14'],
            
            ['uuid' => 'e09fff12-12b7-4e30-9cce-1f5a249696f5',  'name' => 'crm.contact.access',                         'package_uuid' => 'c5f44c96-3fcb-4d63-b973-598f103b6e14'],
            ['uuid' => '1120093d-ffc0-42a3-baed-cfb2f787df34',  'name' => 'crm.contact.list',                           'package_uuid' => 'c5f44c96-3fcb-4d63-b973-598f103b6e14'],
            ['uuid' => 'df69f886-ffe8-48c8-a1ba-d600bd1ba3a2',  'name' => 'crm.contact.create',                         'package_uuid' => 'c5f44c96-3fcb-4d63-b973-598f103b6e14'],
            ['uuid' => '805f860d-459a-4514-8ebc-064cd473aa42',  'name' => 'crm.contact.get',                            'package_uuid' => 'c5f44c96-3fcb-4d63-b973-598f103b6e14'], 
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CrmPermissionSeeder"
 */
