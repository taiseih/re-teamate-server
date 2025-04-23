<?php

namespace App\Http\Actions\Employees;

use App\Builders\Employee\EmployeeBuilder;
use App\Http\Actions\DataTransferObject\Input\Employees\EmployeeActionInput;
use App\Models\Employee;

class EmployeeIndexAction
{
    /**
     * @param EmployeeActionInput $input
     * @return void
     */
    public function extends(EmployeeActionInput $input)
    {
        $employee = Employee::query()->getemployee($input->employee_id);

        dd($employee);
    }
}
