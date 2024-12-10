<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function __construct() {
        dd($request);
    }

    public function index(Request $request)
    {

    }

    public function store(Request $request)
    {
        dd($request);
        $validator = Validator::make($request->all, [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422); // 422: Unprocessable Entity
        }

        // Process valid data
        $data = $request->only(['first_name', 'last_name']);
        $data['uuid'] = Str::uuid();

        Employee::create($data);

        return response()->json([
            'success' => true,
            'message' => 'User created successfully!',
        ]);

    }
}
