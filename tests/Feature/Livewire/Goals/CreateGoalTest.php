<?php

declare(strict_types=1);

use App\Models\User;
use Livewire\Livewire;

uses()->group("create-goals", "goals");

test('it can render the create goal component', function () {
    Livewire::test('create-goal')
        ->assertStatus(200);
});

test('it validates the input fields', function () {
    $result = Livewire::test('create-goal')
        ->set('title', '')
        ->set('description', '')
        ->set('status', '')
        ->set('priority', '')
        ->set('due_date', '')
        ->call('submit');

    $result->assertHasErrors([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'priority' => 'required',
            'due_date' => 'required',
        ]);
});

test('it can create a goal', function () {
    $user = User::factory()->create();

    Livewire::actingAs($user)
        ->test('create-goal')
        ->set('title', 'Test Goal')
        ->set('description', 'This is a test goal.')
        ->set('status', 'pending')
        ->set('priority', 'medium')
        ->set('due_date', '2025-01-01')
        ->call('submit')
        ->assertRedirect(route('goals.index'));

    $this->assertDatabaseHas('goals', [
        'title' => 'Test Goal',
        'description' => 'This is a test goal.',
        'status' => 'pending',
        'priority' => 'medium',
        'due_date' => '2025-01-01',
        'user_id' => $user->id,
    ]);
});
