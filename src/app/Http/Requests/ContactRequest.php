<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'gender' => 'required',
            'email' => ['required', 'email:rfc,dns'],
            'postcode' => ['required', 'regex:/^\d{3}-\d{4}$/'],
            'address' => 'required',
            'building_name' => 'max:255',
            'opinion' => 'max:120',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'postcode' => mb_convert_kana($this->input('postcode'), 'n'),
        ]);
    }
}
