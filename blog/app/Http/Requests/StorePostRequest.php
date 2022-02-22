<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return Auth::check();
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
            'title' => ['required', 'unique:posts', 'min:3'],
            'description' => ['required', 'min:10'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Overrided Required Message',
            'title.min' => 'Changed the min rule default message for title'
        ];
    }
}