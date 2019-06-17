<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
    	$employee = new Employee();
    	$employees = $employee->all();

    	return view("employees.listing",[
    		'items' => $employees
    	]);
    }
}
