<?php

use Illuminate\Database\Seeder;
use Quasar\Admin\Models\Resource;

class CrmResourceSeeder extends Seeder
{
    public function run()
    {
        Resource::insert([
            ['uuid' => '137fdbd4-85c3-4bac-bfd3-9f49d6ad528f',      'name' => 'crm',                                'has_custom_fields' => false,   'has_attachments' => false,     'package_uuid' => 'c5f44c96-3fcb-4d63-b973-598f103b6e14'],
            ['uuid' => 'f4b27a83-026e-42c8-9faf-b85f3e2b2ecc',      'name' => 'crm.contactGroup',                   'has_custom_fields' => false,   'has_attachments' => false,     'package_uuid' => 'c5f44c96-3fcb-4d63-b973-598f103b6e14'],
            ['uuid' => '2304b0fe-5c5d-480c-853e-97e3183904aa',      'name' => 'crm.contact',                        'has_custom_fields' => true,    'has_attachments' => true,      'package_uuid' => 'c5f44c96-3fcb-4d63-b973-598f103b6e14']
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CrmResourceSeeder"
 */
