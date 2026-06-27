<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Note;

class Steps extends Model
{
    /** @use HasFactory<\Database\Factories\StepsFactory> */
    use HasFactory;
    protected $attributes =[
        'completed'=>false,
];

    public function note():BelongsTo{
        return $this->belongsTo(Note::class);
    }
}
