<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Administrator\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser()
    {
        $user = UserModel::all();
        return $user;
    }
}
