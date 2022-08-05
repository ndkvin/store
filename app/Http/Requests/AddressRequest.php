<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'provinces_id' => 'required|integer',
            'regencies_id' => 'required|integer',
            'zip_code' => 'required|integer',
            'address_one' => 'required|string',
            'address_two' => 'required|string',
            'country' => 'required|string',
            'address_two' => 'required|string',
            'phone_number' => 'required|integer',
        ];
    }
}
