<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuckyNumberController extends Controller
{
    //
    public function guest(Request $request){
        return view('lucky_random_number');
    }
    public function add(Request $request){
        return view('lucky_number.add');
    }
    public function store(Request $request){
        $request->validate([
            'file' => 'required|file|mimes:xls,xlsx'
        ],
        [
            'required' => ':attribute không được để trống !',
            'mimes' => ':attribute phải là file excel',
        ]);

    }
}
