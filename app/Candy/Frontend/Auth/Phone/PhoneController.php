<?php

namespace App\Candy\Frontend\Auth\Phone;

use App\Candy\Frontend\Auth\Phone\Resources\VerifyResource;
use App\Candy\Frontend\Auth\Phone\Resources\LoginResource;
use App\Candy\Frontend\Auth\Phone\Requests\VerifyRequest;
use App\Candy\Frontend\Auth\Phone\Requests\LoginRequest;
use App\Controllers\BaseController;
use App\Models\User;

class PhoneController extends BaseController
{
    public function login(LoginRequest $request)
    {
        $user = User::wherePhone($request->phone)->first();

        if (!$user) {

            $user = User::create(['phone' => $request->phone, 'type' => 'user']);
        }

        $total = $user->tokens()->subOneMinute()->first();

        if ($total) {
            $this->raiseNothing();
        }

        $data = ['status' => 'pending'];

        $user->tokens()
            ->create($data);

        return LoginResource::make($user);
    }

    public function verify(VerifyRequest $request)
    {
        $user = User::wherePhone($request->phone)->first();

        if (!$user) {
            $this->raiseNothing();
        }

        $token = $user->tokens()->whereToken($request->token)->whereStatus('sent')->first();

        if (!$token) {
            $this->raiseNothing();
        }

        $data = ['status' => 'completed'];

        $token->fill($data);
        $token->save();

        return VerifyResource::make($user);
    }
}
