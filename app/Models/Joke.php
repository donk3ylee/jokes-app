<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Joke extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'joke',
        'punchline',
        'category',
        'graphics',
    ];

    // public function rating(): BelongsTo
    // {
    //     return $this->belongsTo(Ratings::class);
    // }
}
