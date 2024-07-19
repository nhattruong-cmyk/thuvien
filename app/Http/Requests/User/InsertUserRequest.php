<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class InsertUserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'img' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    
    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên.',
            'name.max' => 'Tên không được vượt quá 255 ký tự.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'email.max' => 'Email không được vượt quá 255 ký tự.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'img.file' => 'File tải lên phải là định dạng hình ảnh.',
            'img.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, gif hoặc svg.',
            'img.max' => 'Kích thước hình ảnh tối đa là 2MB.',
        ];
    }
    
    
    
}