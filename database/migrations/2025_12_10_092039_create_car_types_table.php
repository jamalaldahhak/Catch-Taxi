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

            // FK instead of enum
            $table->foreignId('service_category_id')
                ->constrained('service_categories')
                ->restrictOnDelete();

            $table->string('name');
            $table->string('image')->nullable();

            $table->decimal('cost_for_km', 8, 2);
            $table->decimal('time_fare', 8, 2);
            $table->decimal('base_fare', 8, 2);
            $table->decimal('min_fare_amount', 8, 2);

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
