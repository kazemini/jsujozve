<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'download_link',
        'sample_link',
        'author_id',
    ];

    public function logs(): HasMany
    {
        return $this->hasMany(Log::class);
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(User::class,'author_id');
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }

    public function liked(): HasMany
    {
        return $this->hasMany(Like::class)->where( 'user_id',auth()->user()->id)->take(1);
    }

    public function forums(): BelongsToMany
    {
        return $this->belongsToMany(Forum::class);
    }
}
