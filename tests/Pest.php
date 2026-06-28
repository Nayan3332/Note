<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

// 1. Standard Feature and Unit Tests
pest()->extend(TestCase::class)
    ->use(RefreshDatabase::class)
    ->in('Feature', 'Unit');


// 2. Dedicated Browser (Dusk) Tests Configuration
pest()->extend(\Tests\DuskTestCase::class)
    ->use(\Illuminate\Foundation\Testing\DatabaseMigrations::class) // Clears and builds tables
    ->in('Browser');

/*
|--------------------------------------------------------------------------
| Expectations / Functions ...
|--------------------------------------------------------------------------
*/
expect()->extend('toBeOne', fn () => $this->toBe(1));

function something(): void
{
    // ..
}
