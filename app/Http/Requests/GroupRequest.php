<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;
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
            'count_category' => 'required|numeric|in: 4,6,8',
            'category_id' => [
                'required',
                'array',
                'exists:categories,id',
                function ($attribute, $value, $fail) {
                    if (!in_array(count($value), [4, 6, 8])) {
                        $fail("The {$attribute} must contain exactly 2, 4, or 6 items.");
                    }
                },
            ],
            'name_game' => 'required|min:3',
            'team_1' => 'required|min:3',
            'team_2' => 'required|min:3',
            'Number_of_questions' => 'required'

        ];
    }

    public function messages(): array
    {
        return [
            'category_id.required' => 'the category must be required',
            'category_id .array' => 'the category must be array',
            'category_id.min' => 'the category more then 8 ',
            'name_game.required' => ' the name must be required',
            'name_game.min' => 'The name game field must be at least 3 characters.',
            'team_1.required' => 'the team_1 must be required',
            'team_1.min' => 'the team_1 field must be at least 3 characters.',
            'team_2.required' => 'the team_1 must be required',
            'team_2.min' => 'the team_1 field must be at least 3 characters.',
            'number_of_questions' => 'the number_of_questions must be  required '
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => 'error',
            'messages' => $validator->errors()
        ], 422));
    }
}

