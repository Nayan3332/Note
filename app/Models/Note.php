<?php

declare(strict_types=1);

namespace App\Models;

use App\NoteStatus;
use Database\Factories\NoteFactory;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

class Note extends Model
{
    /** @use HasFactory<NoteFactory> */
    use HasFactory;

    protected $casts = [
        'links' => AsArrayObject::class,
        'status' => NoteStatus::class,
    ];

    protected $attributes = [
        'status' => NoteStatus::Pending->value,
    ];

    public static function statuscounts(User $user): Collection
    {
        // count the number of notes by status
        $statusCounts = $user->notes()
            ->selectRaw('status, count(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status');

        return collect(NoteStatus::cases())
            ->mapWithKeys(fn ($status) => [
                $status->value => $statusCounts->get($status->value, 0),
            ])
            ->put('all', $user->notes()->count());
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function steps(): HasMany
    {
        return $this->hasMany(Steps::class);
    }
}
