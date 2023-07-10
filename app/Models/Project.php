<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'projects';
    protected $fillable = [
        'id',
        'project_name',
        'project_company',
        'is_active'
    ];


    protected $hidden = [];
}
