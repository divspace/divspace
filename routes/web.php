<?php

Route::get('/', function () {
    $email = config('contact.email');
    $phone = config('contact.phone');

    preg_match('/^(\+[0-9])([0-9]{3})([0-9]{3})([0-9]{4})$/', $phone, $parts);

    $phoneFormatted = $parts[1].' '.$parts[2].' '.$parts[3].' '.$parts[4];

    return view('index', compact('email', 'phone', 'phoneFormatted'));
});
