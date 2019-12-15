<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acme\Todo;

class TodoController extends Controller
{
    public function index()
    {
        //return new TodoResource(Todo::first()); 
        return 'test';
    }
}
