<?php

namespace App\Http\Controllers;

use App\Models\UserMobile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexUser()
    {
        return response()->json(
            UserMobile::get()
        );
    }
}
