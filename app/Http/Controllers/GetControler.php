<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Paginated;
use Illuminate\Http\Request;

class GetControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Paginator::all(4);
        $data = Paginated::paginate(5);
        $data->withPath('http://127.0.0.1:8004/paginate');

        return response()->json(['success' => '1', 'data' => $data->items(), 'links' => (string)$data->links() ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
