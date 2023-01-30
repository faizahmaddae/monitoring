<?php

namespace App\Http\Requests\reflectionkeywords;

use Illuminate\Foundation\Http\FormRequest;

class StoreReflectionKeywordsRequest extends FormRequest
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
            'reflection_id'=> ['required', 'integer'],
            'keyword_id'=> ['required', 'integer'],
        ];
    }
}
