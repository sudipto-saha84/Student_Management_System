<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function createRole($id){
        return view('admin.role.create', ['role' => isset($id) ? Role::find($id) : '']);
    }

    public function newRole(Request $request, $id=null){

        Role::addRole($request, $id);
        if ($id){
            return redirect('/manage-role')->with('message', 'Role Data Updated');
        }
        else{
            return redirect()->back()->with('message', 'New Role Added');
        }
    }

    public function manageRole(){
        return view('admin.role.manage', ['roles' => Role::all()]);
    }

    public function roleStatus($id){

        Helper::changeStatus(Role::find($id));
        return redirect()->back()->with('message', 'Role Status Changed');
    }
}
