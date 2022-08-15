<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $guarded = [];


    public static function saveTeacherData(Request $request, $id){

        $teacher = Teacher::find($id);
        $teacher->name         = $request->name;
        $teacher->email        = $request->email;
        $teacher->phone        = $request->phone;
        $teacher->address      = $request->address;
        $teacher->description  = $request->description;
        $teacher->image        = isset($teacher->image) ? Helper::getImageUrl($request->file('image'), 'public/uploaded/teacher-image/', $teacher->image) : Helper::getImageUrl($request->file('image'), 'public/uploaded/teacher-image/');
        $teacher->save();
    }
}
