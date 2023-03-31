<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mountain;

class MountainController extends Controller
{
    public function index()
    {
        $mountains = Mountain::all();
        return view('backend.mountain.index', compact('mountains'));
    }
}
