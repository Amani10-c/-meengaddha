<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class QuestionRequest extends FormRequest
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
            'category_id' => ' required| exists:categories,id',
            'point' => 'required| exists:questions,point'
        ];
    }

    public function messages(): array
    {
        return [
            'category_id.required' => 'the category_id must be required',
            'category_id.exists'=>'the category_id must be exists',
            'point.required' =>'the point must be required',
            'point.exists'=>'the point must be exists'

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
