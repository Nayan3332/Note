<?php
use App\Models\Note;
use App\Models\User;
// use Illuminate\Support\Collection;

test('It is belong to a user', function () {
    $note = Note::factory()->create();
    expect($note->user)->toBeInstanceOf(User::class);
});
test('It can have steps', function () {
    $note = Note::factory()->create();
    expect($note->steps)->toBeEmpty();
});
