<?php
use Tinkerwell\Drivers\LaravelTinkerwellDriver;
use Tinkerwell\Drivers\TinkerwellDriver;

$group = 'TinkerwellDriverTest';

it('should be laravel driver', function() {
    $driver = TinkerwellDriver::detectDriverForPath(__DIR__ . '/fixtures/laravel');
    expect($driver)->toBeInstanceOf(LaravelTinkerwellDriver::class);
})->group($group);
