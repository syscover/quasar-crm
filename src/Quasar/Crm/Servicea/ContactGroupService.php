<?php namespace Quasar\Crm\Services;

use Quasar\Core\Services\CoreService;
use Quasar\Crm\Models\ContactGroup;

class ContactGroupService extends CoreService
{
    public function create(array $data)
    {
        $this->validate($data, [
            'uuid' => 'nullable|uuid',
            'name' => 'required|between:2,255'
        ]);

        return ContactGroup::create($data)->fresh();
    }

    public function update(array $data, string $uuid)
    {
        $this->validate($data, [
            'id'    => 'required|integer',
            'uuid'  => 'required|uuid',
            'name'  => 'between:2,255'
        ]);

        $object = ContactGroup::where('uuid', $uuid)->first();

        // fill data
        $object->fill($data);

        // save changes
        $object->save();

        return $object;
    }
}
