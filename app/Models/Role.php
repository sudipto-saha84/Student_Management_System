<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function addRole($request, $id=null){
        Role::updateOrCreate(['id' => $id], [
            'display_name' => $request->display_name,
            'role_name'    => $request->role_name,
            'status'       => isset($id) ? Role::find($id)->status : 1,
        ]);
    }
}
