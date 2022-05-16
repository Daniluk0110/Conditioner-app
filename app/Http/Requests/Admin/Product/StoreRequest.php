<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|min:2',
            'description' => 'required|string|min:2',
            'preview_image' => 'required|file',
            'company_id' => 'required|integer|exists:companies,id',
            'property_ids' => 'nullable|array',
            'property_ids.*' => 'nullable',
        ];
    }
}
