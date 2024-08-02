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
            'maSach' => 'required|exists:products,id',
            'trangthai' => 'nullable|in:1,2,3',
            'soluong' => 'required|integer|min:1',
            'ngayMuon' => 'required|date',
            'hanTra' => 'required|date|after_or_equal:ngayMuon',
            'tenSach' => 'required|string|max:255',
        ];
    }
    public function messages()
    {
        return [
            'userId.required' => 'Vui lòng chọn mã khách hàng',
            'userId.exists' => 'Mã khách hàng không tồn tại',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.numeric' => 'Số điện thoại không hợp lệ',
            'maSach.required' => 'Vui lòng chọn mã sách',
            'maSach.exists' => 'Mã sách không tồn tại',
            'trangthai.nullable' => 'Vui lòng chọn trạng thái',
            'trangthai.in' => 'Trạng thái không hợp lệ',
            'soluong.required' => 'Vui lòng nhập số lượng',
            'soluong.integer' => 'Số lượng phải là số nguyên',
            'soluong.min' => 'Số lượng phải lớn hơn 0',
            'ngayMuon.required' => 'Vui lòng nhập ngày mượn',
            'ngayMuon.date' => 'Ngày mượn không hợp lệ',
            'hanTra.required' => 'Vui lòng nhập ngày trả',
            'hanTra.date' => 'Ngày trả không hợp lệ',
            'hanTra.after_or_equal' => 'Ngày trả phải sau hoặc bằng ngày mượn',
            'tenSach.required' => 'Vui lòng nhập tên sách',
            'tenSach.string' => 'Tên sách phải là chuỗi ký tự',
            'tenSach.max' => 'Tên sách không được vượt quá 255 ký tự',
            'userName.required' => 'Vui lòng nhập tên khách hàng', 
            'userName.string' => 'Tên khách hàng phải là chuỗi ký tự', 
            'userName.max' => 'Tên khách hàng không được vượt quá 255 ký tự',
        ];
    }
}
