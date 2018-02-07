<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorsHandoverRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'day_night' => 'required|max:255',
            'surgical'  => 'max:255',
            'tentative_date_of_surgery'  => 'max:255',
            'date_of_surgery'  => 'max:255',
            'physician_reference'  => 'max:255',
            'other_physician_reference'  => 'max:255',
            'pathological_investigation_done'  => 'max:255',
            'pathological_investigation_collected'  => 'max:255',
            'radiological_investigation_collected'  => 'max:255',
            'other_investigation_done'  => 'max:255',
            'other_investigation_collected'  => 'max:255',
            'echo'  => 'max:255',
            'physiotherapy'  => 'max:255',
            'specific_instruction'  => 'max:255',
            'verified_by_assistant'  => 'max:255',
            'name_given'  => 'required|max:255',
            'date_given'  => 'required|max:255',
            'time_given'  => 'required|max:255',
            'name_taken'  => 'required|max:255',
            'date_taken'  => 'required|max:255',
            'time_taken'  => 'required|max:255',
        ];
    }
}
