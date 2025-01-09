<?php

uses()->group('contact');

test('contact page is displayed', function (): void {
    $response = $this
        ->get('/contacts');

    $response->assertOk();
    $response->assertSee('Contact Us');
});
