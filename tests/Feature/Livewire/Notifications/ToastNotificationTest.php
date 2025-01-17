<?php

declare(strict_types=1);

use Livewire\Livewire;

uses()->group("toast-notification");

test('it shows success notification', function (): void {
    $result = Livewire::test('toast-notification')
        ->dispatch(
            'notify',
            'success',
            'Operation was successful!',
        );

    $result->assertSet('type', 'success');
    $result->assertSet('message', 'Operation was successful!');
    $result->assertSee('Operation was successful!');
    $result->assertSee('bg-green-500');
})->skip('Skipping this test for now.');

test('it shows fail notification', function (): void {
    $result = Livewire::test('toast-notification')
        ->dispatch(
            'notify',
            'fail',
            'Operation failed!',
        );

    $result->assertSet('type', 'fail');
    $result->assertSet('message', 'Operation failed!');
    $result->assertSee('Operation failed!');
    $result->assertSee('bg-red-500');
})->skip('Skipping this test for now.');
