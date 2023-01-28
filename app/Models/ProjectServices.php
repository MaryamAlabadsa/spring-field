<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectServices extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project-id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service-id');
    }
}
