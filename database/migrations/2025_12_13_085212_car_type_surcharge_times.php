<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_type_surcharge_times', function (Blueprint $table) {
            $table->id();

            $table->foreignId('car_type_id')
                ->constrained('car_types')
                ->cascadeOnDelete();

            // SUN, MON, TUE ...
            $table->enum('day', [
                'SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'
            ]);

            $table->time('start_time');
            $table->time('end_time');

            // surcharge value
            $table->unsignedInteger('amount');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
