<?php namespace Quasar\Crm\GraphQL\Resolvers;

use Quasar\Core\GraphQL\Resolvers\CoreResolver;

use Quasar\Crm\Models\ContactGroup;
use Quasar\Crm\Services\ContactGroupService;

class ContactGroupResolver extends CoreResolver
{
    public function __construct(ContactGroup $model, ContactGroupService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
