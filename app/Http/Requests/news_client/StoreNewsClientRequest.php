<?php

namespace App\Http\Requests\news_client;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsClientRequest extends FormRequest
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
            'news_id' => ['required', 'integer', /**'exists:news,id'*/],
            'category_id' => ['required', 'integer', /**'exists:categories,id'*/],
            'client_id' => ['required', 'integer', /**'exists:clients,id'*/],
        ];
    }
}
