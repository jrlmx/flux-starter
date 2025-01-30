<?php

use function Laravel\Folio\middleware;
use function Laravel\Folio\name;

name('dashboard');

middleware(['auth', 'verified']);

?>


<x-layouts.app pg_title="Dashboard">
    <flux:heading size="lg" level="1">Dashboard</flux:heading>
</x-layouts.app>
