<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Paginated;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('catview', ['data' => $data]);
    }

    public function catget()
    {
        $subdata = SubCategory::all();
        return response()->json(['subdata' => $subdata]);
    }

    public function pagent()
    {

        $data = Http::get('http://127.0.0.1:8000/api/getdata');
        dd($data);
        $temp = response()->json([$data]);
        
        echo ('<pre>');
        print_r($data);
        die;
        // return view('pagination', ['data' => $data]);
        // return view('pagination1');
    }
}
