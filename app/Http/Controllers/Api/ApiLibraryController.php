<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiLibraryController extends Controller
{
    public function store(Request $request)
    {
      return response()->json([], 201);
    }

    public function show($id)
    {
      return response()->json([], 200);
    }
}
