<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class viewController extends Controller
{
    public function viewbtn() {
        return view('temp');
    }

    public function store(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:5',
            'email' => 'required|email|unique:users',
        ]);
    
        if ($validator->fails()) {
            // return response()->json([
            //     'success' => '0',
            //     "message" => 'Failed.',
            //     'errors' => $validator->errors()
            // ]);
            // return response()->json(['message' => $validator->errors()]);
            return redirect('checkbutton')->withErrors($validator, 'login');
            return redirect('checkbutton')
                ->withErrors($validator)
                ->withInput();
        }

        return response()->json([
            'success' => '1',
            "message" => 'Record created successfully.',
        ]);
    }

    public function delstatus(Request $request) {

        $data = $request->post('status');

        if($data) {
            return response()->json(['data' => $data ]);

        }

        return response()->json(['data' => 'empty' ]);

    }
}
