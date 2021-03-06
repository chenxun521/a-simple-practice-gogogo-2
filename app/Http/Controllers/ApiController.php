<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    // API - 例 的控制器部分
    public function hello()
    {
        return response()->json([
            'ret' => 200,
            'desc' => 'success',
            'data' => 'Hello World'
        ]);
    }

    public function UserAgent(Request $request)
    {
        return response()->json([
            'ret'=> 200,
            'desc'=> 'success',
            'data'=> [
                "ip"=> $request->ip(),
                "ua"=> $request->header('User-Agent')
            ]
        ]);       
    }
}
