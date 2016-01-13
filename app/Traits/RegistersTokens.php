<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

trait RegistersTokens
{
    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $validator = $this->validator(
            $request->all()
        );

        if ($validator->fails()) {
            $this->throwValidationException(
                $request,
                $validator
            );
        }

        $token = JWTAuth::fromUser(
            $this->create(
                $request->all()
            )
        );

        return response()
            ->json(
                [
                    'token' => $token
                ]
            );
    }
}
