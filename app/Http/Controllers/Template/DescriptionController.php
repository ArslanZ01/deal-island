<?php

namespace App\Http\Controllers\Template;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DescriptionController extends Controller
{
    public function create(Request $request)
    {
        return view('templates.description.create');
    }

    public function show(Request $request)
    {
        return view('templates.description.show')->with($request->except('_token'));
    }

}
