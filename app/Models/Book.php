<?php

namespace App\Models;

use App\Models\Loan;
use App\Models\Genre;
use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{

    protected $fillable = [
        'author_id',
        'genre_id',
        'title',
        'isbn',
        'pages',
        'stock',
        'published_at'
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'date:Y-m-d'
        ];
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    public function loans(): HasMany
    {
        return $this->hasMany(Loan::class);
    }
    
}
