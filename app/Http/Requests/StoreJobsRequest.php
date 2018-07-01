<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use const true;

class StoreJobsRequest extends FormRequest
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

            'job_tittle' => 'required|max:255',
            'job_category' => 'required|max:255',
            'job_nature' => 'required|max:255',
            'job_educational_req' => 'required|max:255',
            'job_year_of_exp' => 'required|max:255',
            'job_salary' => 'required|max:255',
            'job_location' => 'required|max:255',
            'job_description' => 'required|max:255',
            'job_dead_line' => 'required|max:255',

        ];
    }
}
