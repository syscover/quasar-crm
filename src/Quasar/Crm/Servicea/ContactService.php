<?php namespace Quasar\Crm\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Quasar\Core\Services\CoreService;
use Quasar\Crm\Models\Contact;

class ContactService extends CoreService
{
    public function create(array $data)
    {
        $this->validate($data, [
            'uuid'                          => 'nullable|uuid',
            'name'                          => 'required|between:2,255',
            'groupUuid'                     => 'required|uuid|exists:crm_contact_group,uuid',
            'langUud'                       => 'nullable|uuid|exists:admin_lang,uuid',
            'genderUuid'                    => 'nullable|uuid',
            'treatmentUuid'                 => 'nullable|uuid',
            'stateUuid'                     => 'nullable|uuid',
            'birthDate'                     => 'nullable|date_format:Y-m-d',
            'email'                         => 'required|email',
            'tags'                          => 'nullable|array',
            'username'                      => 'required|between:2,255|unique:crm_contact,username',
            'password'                      => 'required|between:2,255',
            'isActive'                      => 'nullable|boolean',
            'isConfirmed'                   => 'nullable|boolean',
            'countryCommonUuid'             => 'nullable|uuid|exists:admin_country,common_uuid',
            'administrativeAreaLevel1Uuid'  => 'nullable|uuid|exists:admin_administrative_area_level_1,uuid',
            'administrativeAreaLevel2Uuid'  => 'nullable|uuid|exists:admin_administrative_area_level_2,uuid',
            'administrativeAreaLevel3Uuid'  => 'nullable|uuid|exists:admin_administrative_area_level_3,uuid',
            'fieldGroupUuid'                => 'nullable|uuid|exists:admin_field_group,uuid',
            'data'                          => 'nullable|json'
        ]);

        // set password
        $data['password']   = Hash::make($data['password']);

        return Contact::create($data)->fresh();
    }

    public function update(array $data, string $uuid)
    {
        $this->validate($data, [
            'id'                            => 'required|integer',
            'uuid'                          => 'required|uuid',
            'name'                          => 'required|between:2,255',
            'groupUuid'                     => 'required|uuid|exists:crm_contact_group,uuid',
            'langUud'                       => 'nullable|uuid|exists:admin_lang,uuid',
            'genderUuid'                    => 'nullable|uuid',
            'treatmentUuid'                 => 'nullable|uuid',
            'stateUuid'                     => 'nullable|uuid',
            'birthDate'                     => 'nullable|date_format:Y-m-d',
            'email'                         => 'required|email',
            'tags'                          => 'nullable|array',
            'username'                      => 'required|between:2,255|unique:crm_contact,username,' . $uuid . ',uuid',
            'password'                      => 'required|between:2,255',
            'isActive'                      => 'nullable|boolean',
            'isConfirmed'                   => 'nullable|boolean',
            'countryCommonUuid'             => 'nullable|uuid|exists:admin_country,common_uuid',
            'administrativeAreaLevel1Uuid'  => 'nullable|uuid|exists:admin_administrative_area_level_1,uuid',
            'administrativeAreaLevel2Uuid'  => 'nullable|uuid|exists:admin_administrative_area_level_2,uuid',
            'administrativeAreaLevel3Uuid'  => 'nullable|uuid|exists:admin_administrative_area_level_3,uuid',
            'fieldGroupUuid'                => 'nullable|uuid|exists:admin_field_group,uuid',
            'data'                          => 'nullable|json'
        ]);

        $object = Contact::where('uuid', $uuid)->first();

        // check if there is password
        if ($data['password'] ?? false) $data['password'] = Hash::make($data['password']); else Arr::forget($data, 'password');

        // fill data
        $object->fill($data);

        // save changes
        $object->save();

        return $object;
    }
}
