<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => ["required", "string", "max:100"],
            "dpi" => ["required", "string", "size:13"],
            "address" => ["required", "string", "max:200"],
            "telephone" => ["required", "string", "max:20", "regex:/^\+?[0-9]+$/"],
            "department" => ["required", "string", "max:50"],
            "municipality" => ["required", "string", "max:50"],
            "zone" => ["required", "string", "max:50"],
            "birthdate" => ["required", "date"],
            "gender" => ["required", Rule::in("M", "F", "W")],
            "academic_degree" => ["required", "string", "max:100"],
        ];
    }
}
