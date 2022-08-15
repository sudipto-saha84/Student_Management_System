<?php


namespace App\Helper;


use App\Models\Teacher;
use App\Models\User;

class Helper
{
    private static $code;
    private static $fileName;
    private static $fileUrl;


    public static function changeStatus($item){
        $item->status = $item->status == 1 ? 0 : 1 ;
        $item->save();
    }


    public static function codeGenerate($table, $string){
        self::$code = $string.rand(100, 1000);
        $existCode = $table->where('code', self::$code)->first();
        if ($existCode){
            self::codeGenerate($table, $string);
        }
        return self::$code;
    }


    public static function deleteRow($row1, $row2=null, $row3=null){

        if (file_exists($row1->image)){
            unlink($row1->image);
        }
        if (isset($row2)){
            if (file_exists($row2->image)){
                unlink($row2->image);
            }
            $row2->delete();
        }
        if (isset($row3)){
            if (file_exists($row3->image)){
                unlink($row3->image);
            }
            $row3->delete();
        }
        $row1->delete();
    }


    public static function getImageUrl($image, $imageDirectory, $existFileUrl=null)
    {
        if ($image) {
            if (file_exists($existFileUrl))
            {
                unlink($existFileUrl);
            }
            self::$fileName = time().rand(10,10000).'.'.$image->getClientOriginalExtension();
            $image->move($imageDirectory, self::$fileName);
            self::$fileUrl = $imageDirectory.self::$fileName;
        }
        else {
            if (isset($existFileUrl))
            {
                self::$fileUrl = $existFileUrl;
            }
            else {
                self::$fileUrl = '';
            }
        }
        return self::$fileUrl;
    }
}
