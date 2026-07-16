<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;

uses(RefreshDatabase::class);

it('redirects authenticated users to the student page', function () {
    $user = User::factory()->create([
        'email' => 'winkler@gmail.com',
        'password' => bcrypt('0000'),
    ]);

    $response = $this->post('/login', [
        'email' => 'winkler@gmail.com',
        'password' => '0000',
    ]);

    $response->assertRedirect('/student');
    expect(Auth::check())->toBeTrue();
    expect(Auth::id())->toBe($user->id);
});
