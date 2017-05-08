<?php

Artisan::command('update', function () {
    // Update PHP dependencies
    system('composer update');

    // Optimize the framework for better performance
    $this->call('optimize');

    // List outdated JavaScript dependencies
    system('yarn outdated');
})->describe('Update dependencies and optimize application');
