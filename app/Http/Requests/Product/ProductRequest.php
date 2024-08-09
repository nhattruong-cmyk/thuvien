<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;//phân quyền
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
            'price' => 'required|numeric',
            'category_id' => 'required|integer|exists:categories,id',
            'quantity' => 'required|numeric',
            'img' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'author' => 'required|string|max:255',
            'publication_year' => 'required|digits:4|integer',
        ];
        
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm.',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',
            'price.required' => 'Vui lòng nhập giá sản phẩm.',
            'price.numeric' => 'Giá sản phẩm phải là số.',
            'category_id.required' => 'Vui lòng chọn danh mục.',
            'category_id.integer' => 'Danh mục không hợp lệ.',
            'category_id.exists' => 'Danh mục không tồn tại.',
            'quantity.required' => 'Vui lòng nhập số lượng sản phẩm.',
            'quantity.numeric' => 'Số lượng sản phẩm phải là số.',
            'img.required' => 'Vui lòng chọn hình ảnh sản phẩm.',
            'img.file' => 'File tải lên phải là định dạng hình ảnh.',
            'img.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, gif hoặc svg.',
            'img.max' => 'Kích thước hình ảnh tối đa là 2MB.',
            'author.required' => 'Vui lòng nhập tên tác giả.',
            'author.max' => 'Tên tác giả không được vượt quá 255 ký tự.',
            'publication_year.required' => 'Vui lòng nhập năm xuất bản.',
            'publication_year.digits' => 'Năm xuất bản phải có 4 chữ số.',
            'publication_year.integer' => 'Năm xuất bản phải là một số nguyên.',
        ];
        
    }
}
