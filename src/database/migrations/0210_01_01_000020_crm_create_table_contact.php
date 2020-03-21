<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrmCreateTableContact extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('crm_contact'))
        {
            Schema::create('crm_contact', function (Blueprint $table) {
                $table->engine = 'InnoDB';

                $table->increments('id');
                $table->uuid('uuid');
                $table->uuid('group_uuid');
                $table->uuid('lang_uuid')->nullable();
                $table->string('company')->nullable();
                $table->string('tin')->nullable();
                $table->uuid('gender_uuid')->nullable();
                $table->uuid('treatment_uuid')->nullable();
                $table->uuid('state_uuid')->nullable();
                $table->string('name')->nullable();
                $table->string('surname')->nullable();
                $table->string('avatar')->nullable();
                $table->date('birth_date')->nullable();
                $table->string('email');
                $table->string('phone')->nullable();
                $table->string('mobile')->nullable();
                $table->json('tags')->nullable();

                // access
                $table->string('username');
                $table->string('password');
                $table->string('remember_token')->nullable();
                $table->boolean('is_active')->default(true);
                $table->boolean('is_confirmed')->default(false);

                // geolocation data
                $table->uuid('country_common_uuid')->nullable();
                $table->uuid('administrative_area_level_1_uuid')->nullable();
                $table->uuid('administrative_area_level_2_uuid')->nullable();
                $table->uuid('administrative_area_level_3_uuid')->nullable();
                $table->string('zip')->nullable();
                $table->string('locality')->nullable();
                $table->string('address')->nullable();
                $table->decimal('latitude', 10, 8)->nullable();
                $table->decimal('longitude', 11, 8)->nullable();

                // customs fields
                $table->uuid('field_group_uuid')->nullable();

                // data
                $table->json('data')->nullable();

                $table->timestamps();
                $table->softDeletes();

                $table->index('uuid', 'crm_contact_uuid_idx');


                $table->unique('username', 'crm_contact_username_uq');
                $table->foreign('lang_uuid', 'crm_contact_lang_uuid_fk')
                    ->references('uuid')
                    ->on('admin_lang')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('group_uuid', 'crm_contact_group_uuid_fk')
                    ->references('uuid')
                    ->on('crm_contact_group')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('field_group_uuid', 'crm_contact_field_group_uuid_fk')
                    ->references('uuid')
                    ->on('admin_field_group')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('country_uuid', 'crm_contact_country_uuid_fk')
                    ->references('common_uuid')
                    ->on('admin_country')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

                    

                $table->foreign('territorial_area_1_id', 'fk03_crm_contact')
                    ->references('id')
                    ->on('admin_territorial_area_1')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('territorial_area_2_id', 'fk04_crm_contact')
                    ->references('id')
                    ->on('admin_territorial_area_2')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('territorial_area_3_id', 'fk05_crm_contact')
                    ->references('id')
                    ->on('admin_territorial_area_3')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crm_contact');
    }
}