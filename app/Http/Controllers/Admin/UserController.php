<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class UserController extends Controller
{
    protected $row1;
    protected $row2;
    protected $role;

    public function createUser($id=null){
        return view('admin.user.create', ['user' => isset($id) ? User::find($id) : '', 'roles' => Role::all()]);
    }

    public function manageUser(){
        return view('admin.user.manage', [ 'users' => User::all()]);
    }

    public function newUser(Request $request, $id=null){

        if (!$id){

            $request->validate([
                'name'     => 'required',
                'email'    => 'required|email|unique:users,email',
                'password' => 'required|min:8',
                'role'     => 'required',
            ]);

            if ($request->password == $request->password_confirmation){
                User::customUserCreate($request);
            }
            else{
                return redirect()->back()->with('message', 'Password not matched');
            }
        }
        else{

            $request->validate([
                'name'     => 'required',
                'email'    => 'required|email',
                'role'     => 'required',
            ]);

            User::customUserUpdate($request, $id);
        }

        if ($id){
            return redirect('/manage-user')->with('message', 'User Data Updated');
        }
        else{
            return redirect()->back()->with('message', 'New User Added');
        }
    }


    public function deleteUser($id){

        $this->row1 = User::find($id);

        if ($this->row1->role == 'user'){
            $this->row2 = Student::where('user_id', $id)->first();
        }
        elseif ($this->row1->role == 'teacher'){
            $this->row2 = Teacher::where('user_id', $id)->first();
        }
        Helper::deleteRow($this->row1, $this->row2);
        return redirect()->back()->with('message', 'This User Delete Successfully');
    }

}
