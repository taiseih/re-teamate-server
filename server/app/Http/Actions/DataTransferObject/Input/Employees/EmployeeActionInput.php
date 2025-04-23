<?php

namespace App\Http\Actions\DataTransferObject\Input\Employees;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class EmployeeActionInput extends Data
{
    /**
     * @param int $employee_id
     */
    public function __construct(
        public readonly int $employee_id,
    )
    {

    }
}
