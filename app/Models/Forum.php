<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'admin_id'
    ];

    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class,'admin_id');
    }

    public function subscribers(): HasMany
    {
        return $this->hasMany(Follow::class)->with('user');
    }

    public function subscribed(): HasMany
    {
        return $this->hasMany(Follow::class)->where( 'user_id',auth()->user()->id)->take(1);
    }
}
