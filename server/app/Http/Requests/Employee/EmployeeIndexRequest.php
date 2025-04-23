<?php

namespace App\Http\Requests\Employee;

use App\Http\Actions\DataTransferObject\Input\Employees\EmployeeActionInput;
use App\Models\Employee;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeIndexRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'employee_id' => ['int'],
        ];
    }

    /**
     * @return EmployeeActionInput
     */
    public function makeData(): EmployeeActionInput
    {
        return EmployeeActionInput::from($this->validated());
    }

}
