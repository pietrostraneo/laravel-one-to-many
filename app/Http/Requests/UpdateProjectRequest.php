<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'name' => 'required|max:50|min:5',
            'description' => 'max:60000|min:15',
            'supervisors' => 'required|max:150|min:5',
            'framework' => 'required|max:50|min:5',
            'assignment_date' => 'required|date'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name of the project is mandatory',
            'name.max' => 'The name can be a max of 50 characters length',
            'name.min' => 'The name must be at least 5 characters length',
            'description.max' => 'The description can be a max of 60000 characters length',
            'description.min' => 'The description must be at least 15 characters length',
            'supervisors.required' => 'The name of the supervisors are mandatory',
            'supervisors.max' => 'The supervisors can be a max of 150 characters length',
            'supervisors.min' => 'The supervisors must be at least 5 characters length',
            'framework.required' => 'The name of the framework is mandatory',
            'framework.max' => 'The framework can be a max of 50 characters length',
            'framework.min' => 'The framework must be at least 5 characters length',
            'assignment_date.required' => 'Assignemnt date is mandatory',
            'assignment_date.date' => 'The date must be in the format YYYY-MM-DD'
        ];
    }
}
