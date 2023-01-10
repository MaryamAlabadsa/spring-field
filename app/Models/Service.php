<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function ProjectServices()
    {
        return $this->hasMany(ProjectServices::class);
    }
    public function getImageLinkAttribute()
    {
        return $this->image ? url('/storage/' . $this->image) : url("images/misc/pic_1.jpg");
    }

}
