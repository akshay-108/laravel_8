<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $fillable = [
        'user_id',
        'assigner_id',
        'assignee_id',
        'taks_title',
        'task_description',
        'task_description'
    ];

    public function manager()
    {
        return $this->belongsTo(User::class, 'assigner_id');
    }

    public function developer()
    {
        return $this->belongsTo(User::class, 'assignee_id');
    }
}
