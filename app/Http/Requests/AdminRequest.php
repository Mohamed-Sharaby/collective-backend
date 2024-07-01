<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {


        $rules = [
            'name' => ['string', 'required','max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)],
            'password' => ['required','string','confirmed','min:6'],
            'phone' => ['numeric','nullable'],
            'image' => ['image', 'sometimes','mimes:jpg,jpeg,png,bmp,svg,gif'],
        ];

        if ($this->method() == 'PUT') {
            $rules = [
                'name' => ['string', 'required','max:255'],
                'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->admin)],
                'password' => ['nullable','string','confirmed','min:6'],
                'phone' => ['numeric','nullable'],
                'image' => ['image', 'sometimes','mimes:jpg,jpeg,png,bmp,svg,gif'],
            ];
        }
        return $rules;
    }
}
