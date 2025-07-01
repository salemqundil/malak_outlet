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
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('sale_price', 10, 2)->nullable()->after('price');
            $table->string('sku')->unique()->after('slug');
            $table->integer('stock_quantity')->default(0)->after('stock');
            $table->boolean('is_featured')->default(false)->after('is_active');
            
            // Make brand_id nullable since some products might not have a brand
            $table->foreignId('brand_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['sale_price', 'sku', 'stock_quantity', 'is_featured']);
        });
    }
};
