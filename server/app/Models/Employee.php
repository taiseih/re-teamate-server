<?php

namespace App\Models;

use App\Builders\Employee\EmployeeBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Amp\Dns\query;

class Employee extends Model
{
    use HasFactory;

    /**
     * @param $query
     * @return EmployeeBuilder
     */
    public function newEloquentBuilder($query): EmployeeBuilder
    {
        return new EmployeeBuilder($query);
    }
}
