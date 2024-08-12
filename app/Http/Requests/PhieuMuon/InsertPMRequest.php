<?php

namespace App\Http\Requests\PhieuMuon;

use Illuminate\Foundation\Http\FormRequest;

class InsertPMRequest extends FormRequest
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
    public function rules()
    {
        return [
            'userId' => 'required|exists:users,id',
            'phone' => 'required|numeric',
            'userName' => 'required|string|max:255',
            'status' => 'nullable|in:1,2,3',
            'borrowed_at' => 'required|date',
            'returned_at' => 'required|date|after_or_equal:borrowed_at',
            'bookId.*' => 'required|exists:products,id',
            'bookName.*' => 'required|string|max:255',
            'quantity_in_card.*' => 'required|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'userId.required' => 'Vui lòng chọn mã khách hàng',
            'userName.required' => 'Vui lòng điền tên khách hàng',
            'userId.exists' => 'Mã khách hàng không tồn tại',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.numeric' => 'Số điện thoại không hợp lệ',
            'status.nullable' => 'Vui lòng chọn trạng thái',
            'status.in' => 'Trạng thái không hợp lệ',
            'borrowed_at.required' => 'Vui lòng nhập ngày mượn',
            'borrowed_at.date' => 'Ngày mượn không hợp lệ',
            'returned_at.required' => 'Vui lòng nhập ngày trả',
            'returned_at.date' => 'Ngày trả không hợp lệ',
            'returned_at.after_or_equal' => 'Ngày trả phải sau hoặc bằng ngày mượn',
            'bookId.*.required' => 'Vui lòng chọn mã sách',
            'bookId.*.exists' => 'Mã sách không tồn tại',
            'bookName.*.required' => 'Vui lòng nhập tên sách',
            'bookName.*.string' => 'Tên sách phải là chuỗi ký tự',
            'bookName.*.max' => 'Tên sách không được vượt quá 255 ký tự',
            'quantity_in_card.*.required' => 'Vui lòng nhập số lượng',
            'quantity_in_card.*.integer' => 'Số lượng phải là số nguyên',
            'quantity_in_card.*.min' => 'Số lượng phải lớn hơn 0',
        ];
    }
}
