<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index()
    {
        $tasksCount = Task::all()->count();
        $pendingTask = Task::where('taks_status', 'pending')->count();
        $inProgressTask = Task::where('taks_status', 'in_progress')->count();
        $completedTask = Task::where('taks_status', 'completed')->count();
        return view('admin.dashboard', compact('tasksCount', 'pendingTask', 'inProgressTask', 'completedTask'));
    }
}
