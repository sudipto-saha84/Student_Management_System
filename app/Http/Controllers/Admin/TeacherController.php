<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function addTeacher($id=null){
        return view('admin.teacher.create', ['teacher' => isset($id) ? Teacher::find($id) : null, 'item' => Teacher::where('user_id', Auth::id())->first() ]);
    }

    public function manageTeacher(){
        return view('admin.teacher.manage', ['teachers' => Teacher::all()]);
    }

    public function updateTeacher(Request $request, $id){

        Teacher::saveTeacherData($request, $id);
        return redirect()->back()->with('message', 'Teacher Data Updated');
    }

    public function teacherStatus($id){

        Helper::changeStatus(Teacher::find($id));
        return redirect()->back()->with('message', 'Teacher Status Updated');
    }

    public function deleteTeacher($id){

        $teacher = Teacher::find($id);
        Helper::deleteRow($teacher, User::find($teacher->user_id));
        return redirect('/manage-teacher')->with('message', 'Teacher Deleted Successfully');
    }

}
