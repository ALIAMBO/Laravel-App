<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str; // Add this line

class CreateFailedJobsTable extends Migration
{
    // The 'up' method is used to define the operations to be performed when the migration is run.
    public function up()
    {
        // Create the 'failed_jobs' table with the specified columns.
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique()->default(Str::uuid()); // Update this line
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->nullable();
        });
    }

    // The 'down' method is used to define the operations to be performed when the migration is rolled back.
    public function down()
    {
        // Drop the 'failed_jobs' table if it exists.
        Schema::dropIfExists('failed_jobs');
    }
}