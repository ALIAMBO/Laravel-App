<?php

use Illuminate\Support\Facades\Inspiring;
use Illuminate\Support\Facades\Artisan;

// Define a console command 'inspire' that displays an inspiring quote.
Artisan::command('inspire', function () {
    // Output an inspiring quote to the console.
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');