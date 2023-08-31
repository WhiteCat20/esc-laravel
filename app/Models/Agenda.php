<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function announcements()
    {
        return $this->hasMany(Announcement::class, 'agenda_id', 'id');
    }
    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'agenda_id', 'id');
    }
}

