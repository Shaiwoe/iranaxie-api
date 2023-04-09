<?php

namespace App\Candy\Frontend\Common\User\Profile;

use App\Candy\Frontend\Common\User\Profile\Resources\ProfileResource;
use App\Candy\Frontend\Common\User\Profile\Requests\CreateRequest;
use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function show()
    {
        $profile = request()->user()->profiles()->descendingById()->first();

        if (!$profile) {
            $this->raiseNothing();
        }

        return ProfileResource::make($profile);
    }

    public function create(CreateRequest $request)
    {
        // Upload picture
        $picture = $request->picture->store('identities');

        $data = ['full_name' => $request->full_name, 'father_name' => $request->father_name, 'national' => $request->national, 'phone' => $request->phone, 'country' => $request->country, 'city' => $request->city, 'street' => $request->street, 'postal' => $request->postal, 'picture' => $picture, 'status' => 'pending'];

        $profile = request()->user()->profiles()
            ->create($data);

        return ProfileResource::make($profile);
    }
}
