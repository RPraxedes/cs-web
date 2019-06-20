<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleEditRequest extends FormRequest
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
			'id' => 'required|integer',
            'title' => 'required|alpha_num',
			'body' => 'required',
			'header_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
	
	public function messages()
    {
        return [
            'title.required' => 'A title is required!',
            'body.required' => 'Article body is required!',
			'type' => 'Invalid article type!'
        ];
    }
}
