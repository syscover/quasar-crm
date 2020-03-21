<?php namespace Quasar\Crm\GraphQL\Resolvers;

use Quasar\Core\GraphQL\Resolvers\CoreResolver;

use Quasar\Crm\Models\Contact;
use Quasar\Crm\Services\ContactService;

class ContactResolver extends CoreResolver
{
    public function __construct(Contact $model, ContactService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
