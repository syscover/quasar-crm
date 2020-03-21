<?php namespace Quasar\Crm\Models;

use Quasar\Core\Models\CoreModel;

/**
 * Class Group
 * @package Quasar\Crm\Models
 */

class CustomerGroup extends CoreModel
{
    protected $table        = 'crm_customer_group';
    protected $fillable     = ['uuid', 'name'];
}
