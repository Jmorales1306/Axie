<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Follower extends Model
{
    use HasFactory;


    public function followerUser():HasMany
    {
        return $this->hasMany(User::class); 
    }
}
