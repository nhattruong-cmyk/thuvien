<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use App\Models\PhieuMuon;
use App\Http\Requests\Role\UpdateRoleRequest;
use App\Http\Requests\Role\InsertRoleRequest;

class RoleController extends Controller
{
    public function listRole()
    {
        $roles = Role::orderBy('id', 'ASC')->paginate(6);
        return view('admin.role.list', compact('roles'));
    }
    public function formaddRole()
    {
        $roles = Role::orderBy('role_name', 'ASC')->get();
        return view('admin.role.add', compact('roles'));
    }
    public function insertRole(InsertRoleRequest $request)
    {
        $roleData = $request->all();

        $roles = Role::create($roleData);

        if ($roles) {
            return redirect()->route('admin.role.listRole')->with('success', 'Thêm phân quyền thành công');
        } else {
            return redirect()->back()->withInput()->with('error', 'Đã xảy ra lỗi khi thêm phân quyền');
        }
    }
    public function formupdateRole($id)
    {
        $roles = Role::orderBy('role_name', 'ASC')->get();
        $role = Role::find($id);
        return view('admin.role.edit', compact('roles', 'role'));
    }
    public function updateRole(UpdateRoleRequest $request)
    {

        $id = $request->id;
        $roles = Role::findOrFail($id);
        $validatedData = $request->validated();
        // Kiểm tra nếu không có sự thay đổi
        $isChanged = false;
        foreach ($validatedData as $key => $value) {
            if ($roles[$key] != $value) {
                $isChanged = true;
                break;
            }
        }

        if (!$isChanged) {
            return redirect()->route('admin.role.listRole')->with('info', 'Không có gì thay đổi');
        }
        $roles->update($validatedData);
        return redirect()->route('admin.role.listRole');
    }
    public function delRole($id)
    {
        $roles = Role::find($id);
        if (!$roles) {
            return redirect()->route('admin.role.listRole')->with('error', 'Phân quyền không tồn tại');
        }
        $roles->delete();
        return redirect()->route('admin.role.listRole')->with('success', 'Xóa phân quyền thành công');
    }
}
