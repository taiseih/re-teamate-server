<?php

namespace App\Builders\Employee;

use Illuminate\Database\Eloquent\Builder;

class EmployeeBuilder extends Builder
{
    /**
     * @param int $employeeId
     * @return EmployeeBuilder
     */
    public function getEmployee(int $employeeId): EmployeeBuilder
    {
        return $this->where($employeeId);
    }
}
