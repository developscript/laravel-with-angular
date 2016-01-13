<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

trait AuthenticatesTokens
{
    public function getLogin()
    {
        return $this->showLoginForm();
    }

    protected function showLoginForm()
    {
        return View('auth.login');
    }

    public function postLogin(Request $request)
    {
        return $this->login($request);
    }

    protected function login(Request $request)
    {
        $this->validate(
            $request,
            [
                $this->loginUsername() => 'required', 'password' => 'required',
            ]
        );

        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendTokenLockoutResponse($request);
        }

        $credentials = $this->getCredentials($request);

        if ($token = JWTAuth::attempt($credentials)) {
            return $this->tokenWasAuthenticated($request, $token);
        }

        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }

        return $this->sendFailedLoginResponse($request);
    }

    protected function isUsingThrottlesLoginsTrait()
    {
        return in_array(
            \Illuminate\Foundation\Auth\ThrottlesLogins::class,
            class_uses_recursive(
                get_class($this)
            )
        );
    }

    protected function tokenWasAuthenticated(Request $request, $token)
    {
        return response()
            ->json(
                [
                    'token' => $token
                ],
                200
            );
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return response()
            ->json(
                [
                    'success' => false,
                    'error' => 'invalid_credentials',
                ],
                401
            );
    }

    protected function sendTokenLockoutResponse(Request $request)
    {
        return response()
            ->json(
                [
                    'success' => false,
                    'error' => 'token_locked',
                ],
                500
            );
    }

    protected function sendFailedTokenResponse(Request $request)
    {
        return response()
            ->json(
                [
                    'success' => false,
                    'error' => 'could_not_create_token',
                ],
                500
            );
    }

    protected function getCredentials(Request $request)
    {
        return $request->only(
            $this->loginUsername(),
            'password'
        );
    }

    protected function loginUsername()
    {
        return property_exists($this, 'username') ? $this->username : 'email';
    }
}
