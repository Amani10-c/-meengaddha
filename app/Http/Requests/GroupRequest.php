<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'category_id' => 'required|array|max:8|exists:categories,id',
            'name_game' => 'required|min:3',
            'team_1' => 'required|min:3',
            'team_2' => 'required|min:3',
            'Number_of_questions' => 'required'

        ];
    }
}
