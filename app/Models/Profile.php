<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = $this->image ? $this->image : 'profile/nUmD6du1gSiKfDgYAgTKD9QKqBAk2C9ooHs7GxwB.webp';
        return '/storage/' . $imagePath;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    // Used for pivot table profile_user
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
