<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MountainController extends Controller
{
    public function index()
    {
        return view('backend.mountain.index');
    }
}
