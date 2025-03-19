<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //
    function insertdg(Request $request){
    $uei=$request->a;
    $Taiga=$request->ngu;
    $Phat=$request->depzai;
        if (1===1) {
            return response()->json([
                'message' => 'Đánh giá được thêm thành công.',
                'hehe'=>[$uei,$Taiga,$Phat]
            ], 201);
        } else {
            return response()->json([
                'message' => 'Có lỗi xảy ra khi đánh giá.',
            'hehehaha'=>[$uei,$Taiga,$Phat]
            ],);
        }
    }
}
