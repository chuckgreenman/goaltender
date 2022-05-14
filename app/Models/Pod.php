<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'zoomLink',
        'meetingTime',
        'leaderId'
    ];

    protected function leader()
    {
        return $this->belongsTo(User::class);
    }
}
