<?php

use App\Models\ProductGroup;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ProductGroup::class)->constrained()->cascadeOnDelete();
            $table->string('slug');
            $table->string('product_type');
            $table->string('cable_type');
            $table->string('size');
            $table->string('rated_voltage');
            $table->string('colour');
            $table->string('application_to');
            $table->string('product_standard');
            $table->boolean('rohs')->default(false);
            $table->integer('heat_resistance');
            $table->string('test');
            $table->text('description');
            $table->json('certifications')->nullable();
            $table->string('product_image');
            $table->string('data_sheet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
