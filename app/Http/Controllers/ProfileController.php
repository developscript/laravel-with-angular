<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(
            'token'
        );
    }

    public function getIndex()
    {
        return View('profile.index');
    }

    public function postShow()
    {
        if ($user = JWTAuth::toUser(JWTAuth::getToken())) {
            return response()
                ->json(
                    compact('user')
                );
        }
    }
}
