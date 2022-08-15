<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    protected static $user;

    public static function customUserCreate($request){

        self::$user = new User();
        self::$user->name      = $request->name;
        self::$user->email     = $request->email;
        self::$user->role      = $request->role;
        self::$user->password  = bcrypt($request->password);
        self::$user->save();

        if (self::$user->role == 'user'){

            $student = new Student();
            $student->name      = $request->name;
            $student->email     = $request->email;
            $student->user_id   = self::$user->id;
            $student->status    = 1;
            $student->save();
        }
        elseif (self::$user->role == 'teacher'){

            $teacher = new Teacher();
            $teacher->name      = $request->name;
            $teacher->email     = $request->email;
            $teacher->user_id   = self::$user->id;
            $teacher->status    = 1;
            $teacher->code      = Helper::codeGenerate(Teacher::all(), 'BITMT-');
            $teacher->save();
        }
    }


    public static function customUserUpdate($request, $id){

        self::$user = User::find($id);
        self::$user->name     = $request->name;
        self::$user->email    = $request->email;
        self::$user->role     = $request->role;
        self::$user->save();
        if (self::$user->role == 'user'){

            $student = Student::where('user_id', $id)->first();
            $student->name      = $request->name;
            $student->email     = $request->email;
            $student->save();
        }
        elseif (self::$user->role == 'teacher'){

            $teacher = Teacher::where('user_id', $id)->first();
            $teacher->name      = $request->name;
            $teacher->email     = $request->email;
            $teacher->save();
        }
    }
}
