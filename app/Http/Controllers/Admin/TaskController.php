<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $developers = User::where('role', 'developer')->get();
        return view('admin.tasks.create-task', compact('developers'));
    }

    public function store(Request $request)
    {
        try {
            $validateData = $request->validate([
                'task_title' => 'required|string',
                'task_description' => 'required|string',
                'assignee_developer' => 'required'
            ]);

            $user = $this->getLoginUser();

            if(is_array($validateData)) {
                Task::create([
                    'user_id' => $user->id,
                    'assigner_id' => $user->id,
                    'assignee_id' => $request['assignee_developer'],
                    'taks_title' => $request['task_title'],
                    'task_description' => $request['task_description']
                ]);
            }
            return redirect('admin/tasks/create-task')->with('message', 'Task Created Successfully.');
        } catch (\Exception $e) {
            return redirect('admin/tasks/create-task')->with('message', $e->getMessage());
        }
    }

    public function viewTask()
    {
        try {
            $user = $this->getLoginUser();
            if($user->role == 'manager') {
                $tasks = Task::where('assigner_id', $user->id)
                    ->with(['manager','developer'])
                    ->get();
            } elseif($user->role == 'developer') {
                $tasks = Task::where('assignee_id', $user->id)
                    ->with(['manager','developer'])
                    ->get();
            } else {
                $tasks = Task::with(['manager','developer'])->get();
            }
            return view('admin.tasks.view-task', compact('tasks', 'user'));
        } catch (\Exception $e) {
            return redirect('admin/tasks/view-task')->with('message', $e->getMessage());
        }
    }

    public function edit(Request $request)
    {
        $task = Task::find($request->id);
        $developers = User::where('role', 'developer')->get();
        return view('admin.tasks.edit-task', compact('task', 'developers'));
    }

    public function update(Request $request, $id)
    {
        try {
            $user = $this->getLoginUser();
            $task = Task::find($id);
            $task->user_id = $user->id;
            $task->assigner_id = $user->id;
            $task->assignee_id = $request->assignee_developer;
            $task->taks_title = $request->task_title;
            $task->task_description = $request->task_description;
            $task->taks_status = $request->task_status;
            $task->update();
            return redirect('admin/tasks/view-task')->with('message', 'Task updated successfully');
        } catch (\Exception $e) {
            return redirect('admin/tasks/view-task')->with('message', $e->getMessage());
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            $task = Task::find($id);
            $task->delete();
            return redirect('admin/tasks/view-task')->with('message', 'Task deleted successfully');
        } catch (\Exception $e) {
            return redirect('admin/tasks/view-task')->with('message', $e->getMessage());
        }
    }

    public function getLoginUser()
    {
        return Auth::user();
    }
}
