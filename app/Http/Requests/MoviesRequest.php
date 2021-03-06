<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoviesRequest extends FormRequest
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
            'm_name' => 'required',
            'country' => 'required',
            'production' => 'required',
            'premiere' => 'required',
            'genre_id' => 'required',
            'directors_id' => 'required',
            'is_sequel' => 'nullable|unique:movie'
        ];
    }
}
