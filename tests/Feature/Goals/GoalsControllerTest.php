<?php

use App\Models\Goal;
use App\Models\User;
use App\Models\Family;

uses()->group("goals");

test('goals page is displayed', function (): void {
    $family = Family::factory()->create();
    $user = User::factory()->create([
        'family_id' => $family->id,
    ]);
    $goal = Goal::factory()->create([
        'user_id' => $user->id,
    ]);

    $response = $this
        ->actingAs($user)
        ->get(route('goals.index'));

    $response->assertOk();
    $response->assertSee('Goals');
    $response->assertSee($goal->title);
    $response->assertSee("You currently have 1 goals.");
});

test('create goals page is displayed', function (): void {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->get(route('goals.create'));

    $response->assertOk();
    $response->assertSee('Create Goals');
});

test('edit goals page is displayed', function (): void {
    $user = User::factory()->create();
    $goal = Goal::factory()->create([
        'user_id' => $user->id,
    ]);

    $response = $this
        ->actingAs($user)
        ->get(route('goals.edit', $goal));

    $response->assertOk();
    $response->assertSee('Edit Goal');
});
