<?php

use App\Enums\Status;
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
      Schema::create('car_types', function (Blueprint $table) {
    $table->id();

    $table->foreignId('service_category_id')
        ->constrained('service_categories')
        ->restrictOnDelete();

    $table->string('name');
    $table->string('image')->nullable();

    // money stored as integer (*100)
    $table->unsignedInteger('cost_for_km');
    $table->unsignedInteger('time_fare');
    $table->unsignedInteger('base_fare');
    $table->unsignedInteger('min_fare_amount');
    $table->boolean('surcharge_enabled')->default(false);
    $table->unsignedSmallInteger('status')->default(Status::active->value);

    $table->timestamps();
});


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_types');
    }
};
