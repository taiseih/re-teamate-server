<?php

namespace App\Http\Controllers;

use App\Http\Actions\Employees\EmployeeIndexAction;
use App\Http\Requests\Employee\EmployeeIndexRequest;
use App\Http\Resources\Employees\EmployeeIndexResource;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * @return void
     */
    public function index(EmployeeIndexRequest $request, EmployeeIndexAction $action): EmployeeIndexResource
    {


    }
}
