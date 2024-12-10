<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct() {}

    public function index(Request $request)
    {

    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all, [
            
        ]);
    }
}
