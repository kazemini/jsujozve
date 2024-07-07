<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DocumentForum extends Model
{
    use HasFactory;

    protected $table = 'document_forum';
    protected $fillable = [
        'forum_id',
        'document_id'
    ];

    public function document(): BelongsTo
    {
        return $this->belongsTo(Document::class);
    }

    public function forum(): BelongsTo
    {
        return $this->belongsTo(Forum::class);
    }
}
