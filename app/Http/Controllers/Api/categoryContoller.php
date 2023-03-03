<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
//use categories\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class categoryContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function __construct()
    //  {
    //     $this->middleware()->Auth::guard('sanctum')->except('index','show');

    //  }
    public function index()
    {
        $categories = Category::all();

        return response()->json(
            $categories,200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'name'=>'required|string|unique:category',
            'photo'=>'required'
        ]);
        $categories = Category::create($request->all());
        return response()->json(
            $categories->refresh(),200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::findOrFail($id);
        return response()->json($categories,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request ->validate([
            'name'=>'sometimes|required|string|unique:category',
            'photo'=>'sometimes|required'

        ]);
        $categories = Category::findOrFail($id);
        $categories->update($request->all());


        return response()->json($categories->refresh(),201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return response()->json($categories);


    }
}
