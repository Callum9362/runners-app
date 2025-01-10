<?php

use App\Models\Goal;
use App\Models\User;

uses()->group("goals");

test('goals page is displayed', function (): void {
    $user = User::factory()->create();
    $goal = Goal::factory()->create([
        'user_id' => $user->id,
    ]);

    $response = $this
        ->actingAs($user)
        ->get('/goals');

    $response->assertOk();
    $response->assertSee('Goals');
    $response->assertSee($goal->title);
});
