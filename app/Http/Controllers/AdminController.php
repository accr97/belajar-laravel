<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(request $REQUEST)
    {
        return view('admin.index');
    }
}
