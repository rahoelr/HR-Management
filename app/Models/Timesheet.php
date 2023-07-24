<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timesheet extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tr_timesheet';
    protected $fillable = [
        'ms_employee_id',
        'ms_project_id',
        'work_date',
        'workhour_start',
        'workhour_end',
        'work_location',
        'task',
        'completed_task',
        'todo_task'
    ];


    protected $hidden = [];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'ms_employee_id');
    }
}
