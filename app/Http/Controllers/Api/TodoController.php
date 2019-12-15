<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Acme\Todo;
use App\Http\Resources\Todo as TodoResource;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $todos = Todo::all();
        return response($todos, 200);
        //return $todos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = Todo::create([
            'list' => $request->list
        ]);

        return response()->json([
            "message" => "New list created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $todo = Todo::find($id);
        // return $todo;

        if (Todo::where('id', $id)->exists()) {
            $todo = Todo::find($id);
            return response($todo, 200);
          } else {
            return response()->json([
              "message" => "List not found"
            ], 404);
          }
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
        if (Todo::where('id', $id)->exists()) {
            $todo = Todo::find($id);
            $todo->list = is_null($request->list) ? $todo->list : $request->list;
            $todo->save();
    
            return response()->json([
                "message" => "List updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "List not found"
            ], 404);
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Todo::where('id', $id)->exists()) {
            $todo = Todo::find($id);
            $todo->delete();
    
            return response()->json([
              "message" => "List deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "List not found"
            ], 404);
          }
    }
}
