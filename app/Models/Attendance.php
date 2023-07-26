<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tr_attendance';
    protected $fillable = [
        'ms_employee_id',
        'attendance_date',
        'check_in',
        'check_out',
        'late_checkin_notes',
        'early_checkout_notes'
    ];

    protected $hidden = [];
}
