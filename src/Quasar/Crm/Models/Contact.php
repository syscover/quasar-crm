<?php namespace Quasar\Crm\Models;

use Quasar\Core\Models\CoreModel;

/**
 * Class Contact
 * @package Quasar\Crm\Models
 */

class Contact extends CoreModel
{
    protected $table        = 'crm_contact';
    protected $fillable     = ['uuid', 'groupUuid', 'langUud', 'company', 'tin', 'genderUuid', 'treatmentUuid', 'stateUuid', 'name', 'surname', 'avatar', 'birthDate', 'email', 'phone', 'mobile', 'username', 'password', 'rememberToken', 'isActive', 'isConfirmed', 'countryCommonUuid', 'administrativeAreaLevel1Uuid', 'administrativeAreaLevel2Uuid', 'administrativeAreaLevel3Uuid', 'zip', 'locality', 'address', 'latitude', 'longitude', 'fieldGroupUuid', 'data'];
    protected $hidden       = ['password', 'remember_token'];
}
