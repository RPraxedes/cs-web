<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'position' => ['required', 'string', 'regex:/\bfaculty\b|\badmin\b/']
        ];
    }
	
	public function messages()
    {
        return [
            'name.required' => 'A profile name is required!',
            'email.required' => 'An e-mail address is required!',
			'position' => 'Invalid position!'
        ];
    }
}
