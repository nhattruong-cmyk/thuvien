<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
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
            'role_name' => 'required|string|max:20',
            'description' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'role_name.required' => 'Vui lòng nhập tên danh mục.',
            'role_name.max' => 'Tên danh mục không được vượt quá 20 ký tự.',
        ];
        
    }
}
