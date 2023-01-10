<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public function getMonthAttribute(){
        $carbon = Carbon::parse($this->completed_time);
        return  $carbon->format('M');
    }
    public function getDayAttribute(){
        $carbon = Carbon::parse($this->completed_time);
//        $month = $carbon->month;
        return  $carbon->format('d');
    }

}
