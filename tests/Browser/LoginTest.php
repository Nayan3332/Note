<?php

use App\Models\User;

it('LoginTest', function () {
    $user=User::factory()->create([
        'email'=>'john@example.com',
        'password'=>'password',
    ]);
    $this->visit('/login')
        
        ->fill('email', 'john@example.com')
        ->fill('password', 'password')
        ->click('@login-button')
        ->assertPathIs('/');
        

    $this->assertAuthenticated();
    
});
it ('logout', function () {
    $user=User::factory()->create();
    $this->actingAs($user);
    visit('/')->click('Logout');
    $this->assertGuest();
});