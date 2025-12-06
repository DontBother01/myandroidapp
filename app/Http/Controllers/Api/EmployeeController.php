<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // GET /api/employees
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees); // otomatis jadi JSON
    }

    // GET /api/employees/{id}
    public function show($id)
    {
        $employee = Employee::find($id);
        if (! $employee) {
            return response()->json(['message' => 'Not found'], 404);
        }
        return response()->json($employee);
    }
}
