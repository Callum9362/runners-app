<?php

use App\Models\Goal;
use App\Models\User;
use App\Events\GoalCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Queue;

uses()->group("goal-created-event");

beforeEach(function () {
    Event::fake();
    Mail::fake();
    Queue::fake();
});

test('goal created event is dispatched', function (): void {
    $user = User::factory()->create();
    $goal = Goal::create([
        'title' => 'Test Goal',
        'description' => 'This is a test goal.',
        'status' => 'pending',
        'priority' => 'medium',
        'due_date' => '2025-01-01',
        'user_id' => $user->id,
    ]);

    event(new GoalCreated($goal));

    Event::assertDispatched(GoalCreated::class, function ($event) use ($goal): bool {
        return $event->goal->id === $goal->id;
    });
});
