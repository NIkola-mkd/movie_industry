<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GradeRequest extends FormRequest
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
            'actors_id' => 'required',
            'critics_id' => 'required',
            'acting' => 'required|min:0|max:10',
            'expression' => 'required|min:0|max:10',
            'naturalness' => 'required|min:0|max:10',
            'devotion' => 'required|min:0|max:10',
        ];
    }
}