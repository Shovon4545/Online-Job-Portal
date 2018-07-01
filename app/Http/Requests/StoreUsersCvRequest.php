<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use const true;

class StoreUsersCvRequest extends FormRequest
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
            'user_full_name' => 'required|max:255',
            'user_address' => 'required|max:255',
            'user_phone' => 'required|max:255',
            'user_email' => 'required|max:255',
            'user_objective' => 'required|max:255',
            'user_education' => 'required|max:255',
            'user_date_of_birth' => 'required|max:255',
            'user_experience' => 'required|max:255',
        ];
    }
}
