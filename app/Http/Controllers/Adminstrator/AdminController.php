<?php

namespace App\Http\Controllers\adminstrator;


use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;


class adminController extends Controller
{
    public function storePic($file){
        $now = Carbon::now();
        $year = $now->year;
        $month = $now->month;

        $FileName = $file->getClientOriginalName();

        $locate = "uploads/$year/{$month}/";
        $file = $file->move(public_path($locate),$FileName);
        $sizes = [150,300,700,900,1024];
        $this->resize($file->getRealPath(),$sizes,$locate,$FileName);

        return $locate.$FileName;
    }

    public function resize($file,$sizes,$locate,$FileName){
        foreach ($sizes as $size){
            $imageName = $locate."{$size}_".$FileName;

            Image::make($file)->resize($size,null,function ($constraint){
                $constraint->aspectRatio();
            })->save(public_path($imageName));
        }

    }
}
