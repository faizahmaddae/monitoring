<?php

namespace App\Http\Requests\reflections;

use Illuminate\Foundation\Http\FormRequest;

class StoreReflectionRequest extends FormRequest
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
            'news_id' => ['required', 'integer'],
            'media_id' => ['required', 'integer'],
            // 'date' => ['required', 'date'],
            'begin' => ['required', 'string'],
            'end' => ['required', 'string'],
            'language' => ['required', 'string', 'max:32'],
            // 'date_format:H:i:s'
        ];
    }
}
