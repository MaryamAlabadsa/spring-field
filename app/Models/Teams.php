<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //one team has many projects
    public function projectTeamMember()
    {
        return $this->hasMany(ProjectTeams::class);
    }
    public function getImageLinkAttribute()
    {
//        return $this->image ? $this->image : "images/misc/pic_1.jpg";
        return $this->image ? url('/public/image/' . $this->image) : url("images/misc/pic_1.jpg");
    }
}
