<?php

namespace App\Models;


use App\NoteStatus;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Steps;

class Note extends Model
{
    /** @use HasFactory<\Database\Factories\NoteFactory> */
    use HasFactory;

    protected $casts=[
        'links'=>AsArrayObject::class,
        'status'=>NoteStatus::class,
    ];
    protected $attributes=[
        'status'=>NoteStatus::Pending->value,
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function steps():HasMany{
        return $this->hasMany(Steps::class);
    }
}
