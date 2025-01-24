<?php

declare(strict_types=1);

use App\Models\Goal;
use App\Models\User;
use Livewire\Livewire;
use App\Livewire\GoalsIndex;

uses()->group("goals-index", "goals");

test('it can render the index goal component with goals', function (): void {
    $user = User::factory()->create();
    Goal::factory()->create([
        'user_id' => $user->id
    ]);

    $result = Livewire::actingAs($user)
        ->test('goals-index');

    $result->assertStatus(200);
});

test('it can render the index goal component without goals', function (): void {
    $user = User::factory()->create();

    $result = Livewire::actingAs($user)
        ->test('goals-index');

    $result->assertSee("No goals found.");
});

test('it can delete a goal', function () {
    $user = User::factory()->create();
    $goal = Goal::factory()->create([
        'user_id' => $user->id
    ]);

    Livewire::actingAs($user)
        ->test('goals-index')
        ->call('delete', $goal);

    $goal->refresh();
    expect($goal->deleted_at)->not()->toBeNull();
});
