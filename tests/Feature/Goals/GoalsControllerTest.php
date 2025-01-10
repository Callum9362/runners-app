<?php

use App\Models\User;

uses()->group("goals");

test('goals page is displayed', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->get('/goals');

    $response->assertOk();
});
