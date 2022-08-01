<?php

namespace App\Http\Requests\Admin\UserRequest;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
          'name' => 'required|string|max:25',
          'email' => 'required|email|unique:users',
          'roles' => 'required|in:ADMIN,USER',
        ];
    }

    public function messages()
    {
        return [
            'roles.in' => 'Role value must be ADMIN or USER',
        ];
    }
}
