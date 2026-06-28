<?php

it('register', function () {
    $this->visit('/register')
        ->fill('name', 'John Doe')
        ->fill('email', 'john@example.com')
        ->fill('password', 'password')
        ->fill('password_confirmation', 'password')
        ->click('button[type="submit"]')
        ->assertPathIs('/')
        ->assertSee('Registration successful!');

    $this->assertAuthenticated();
    expect(Auth::user())->toMatchArray([
        'name' => 'John Doe',
        'email' => 'john@example.com',
        
    ]);
});