<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'proposed_project',
        'project_name',
        'start_date',
        'deadline',
        'cost',
        'project_location',
        'divisions',
        'description',
        'assign_team',
        'customer',
        'status'
    ];

    public function divisions()
    {
        return $this->hasMany(\App\Models\Division::class,'project_id','id');
    }
}
