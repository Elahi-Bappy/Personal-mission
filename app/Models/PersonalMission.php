<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Controllers\Middleware;

class PersonalMission extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'personal_mission',
        'edit_flag',
    ];

}
