<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    Public function index()
    {
        return 'Ruta /usuarios resuelta por Admin\UserController@index';
    }
}
