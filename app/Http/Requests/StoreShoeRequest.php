<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShoeRequest extends FormRequest
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
            //
            'image' =>  ['required', 'min:3', 'max:20'],
            'name' =>  ['required', 'min:3', 'max:20'],
            'description' =>  ['required', 'min:3', 'max:20'],
            'price' =>  ['required', 'min:3', 'max:20'],
            'color' =>  ['required', 'min:3', 'max:20'],
        ];
    }
}
