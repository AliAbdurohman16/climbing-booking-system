<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class LogActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::orderByDesc('created_at')->get();
        return view('backend.log-activity.index', compact('activities'));
    }
}
