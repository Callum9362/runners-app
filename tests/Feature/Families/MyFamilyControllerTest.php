<?php

use App\Models\User;
use App\Models\Family;

uses()->group("family");

test('family page is displayed', function (): void {
    $family = Family::factory()->create();
    $user = User::factory()->create([
        'family_id' => $family->id,
    ]);
    $user2 = User::factory()->create([
        'family_id' => $family->id,
    ]);

    $response = $this
        ->actingAs($user)
        ->get(route('family.index'));

    $response->assertOk();
    $response->assertSee('My Family');
    $response->assertSee($user->name);
    $response->assertSee($user2->name);
    $response->assertSee($family->family_name);
});
