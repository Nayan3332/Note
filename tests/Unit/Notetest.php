<?php

declare(strict_types=1);

use App\Models\Note;
use App\Models\User;

test('It is belong to a user', function () {
    $note = Note::factory()->create();
    expect($note->user)->toBeInstanceOf(User::class);
});
test('It can have steps', function () {
    $note = Note::factory()->create();
    expect($note->steps)->toBeEmpty();
});
