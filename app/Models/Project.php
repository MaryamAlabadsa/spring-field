<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'Brief_description',
        'description',
        'completed_time',
//        'second_user',
        //  'number_of_requests'
    ];//    protected $guarded = ['id'];

    public function getMainImageLinkAttribute()
    {
//        $media = [];
        if ($this->media->count()) {
            foreach ($this->media as $medium) {
                if ($medium->is_main)
//                    return url('/storage/' . $medium->name);
                    return $medium->name;
            }
        } else {
            return 'images/team/team_pic_3.jpg';
        }

    }

    public function getProjectsMediaAttribute()
    {
        $media = [];
        if ($this->media->count()) {
            foreach ($this->media as $medium) {
                array_push($media, url('/storage/' . $medium->name));
            }
        } else {
            array_push($media, '');
        }
        return $media;
    }

    public function getCompletedTimeAttribute()
    {
        $currentMonth = Carbon::now()->format('F');
        $currentYear = Carbon::now()->format('Y');
        return $currentMonth . ' ' . $currentYear;
    }

    public function getProjectServiceAttribute()
    {
        $services = [];

        if ($this->projectServices->count()) {
            foreach ($this->projectServices as $service) {
                $s = Service::where('id', $service->service_id)->first();
                array_push($services,$s->id);
            }
        }
//        else {
//            array_push($services, '');
//        }
        return $services;
    }

    //one project has many image/files
    public function media()
    {
        return $this->morphMany(Media::class, 'mediaable');
    }

    //one project has many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //one project has many projects team members
    public function projectTeamMember()
    {
        return $this->hasMany(ProjectTeams::class);
    }

    //one project has many ProjectServices
    public function projectServices()
    {
        return $this->hasMany(ProjectServices::class);
    }
}
