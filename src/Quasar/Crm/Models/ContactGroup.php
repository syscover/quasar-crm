<?php namespace Quasar\Crm\Models;

use Quasar\Core\Models\CoreModel;

/**
 * Class ContactGroup
 * @package Quasar\Crm\Models
 */

class ContactGroup extends CoreModel
{
    protected $table        = 'crm_contact_group';
    protected $fillable     = ['uuid', 'name'];
}
