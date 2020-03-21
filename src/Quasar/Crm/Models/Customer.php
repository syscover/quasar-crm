<?php namespace Quasar\Crm\Models;

use Quasar\Core\Models\CoreModel;

/**
 * Class Customer
 * @package Quasar\Crm\Models
 */

class Customer extends CoreModel
{
    protected $table        = 'crm_customer_group';
    protected $fillable     = ['uuid', 'langUud', 'groupUuid', 'company', 'tin', 'genderUuid', 'treatmentUuid', 'stateUuid', 'name', 'surname', 'avatar', 'birthDate', 'email', 'phone', 'mobile', 'username', 'password', 'rememberToken', 'isActive', 'isConfirmed', 'countryUuid', 'administrativeAreaLevel1Uuid', 'administrativeAreaLevel2Uuid', 'administrativeAreaLevel3Uuid', 'zip', 'locality', 'address', 'latitude', 'longitude', 'fieldGroupUuid', 'data'];
}
