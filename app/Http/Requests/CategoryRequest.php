<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {


        $rules = [
            'name' => ['string', 'required', 'max:255'],
            'description' => ['string', 'required', 'max:255'],
            'image' => ['image', 'sometimes', 'mimes:jpg,jpeg,png,bmp,svg,gif'],
        ];

        if ($this->method() == 'PUT') {
            $rules = [
                'name' => ['string', 'required', 'max:255'],
                'description' => ['string', 'required', 'max:255'],
                'image' => ['image', 'sometimes', 'mimes:jpg,jpeg,png,bmp,svg,gif'],
            ];
        }
        return $rules;
    }
}
