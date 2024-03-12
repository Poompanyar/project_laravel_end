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
        Schema::create('populations', function (Blueprint $table) {
            $table->id();
            $table->string('pu_country')->comment('ประเทศ');
            $table->integer('pu_total_all')->comment('จำนวนประชากร');
            $table->decimal('pu_density')->comment('ความหน้าแน่นของประชากร');
            $table->decimal('pu_median_age')->comment('อายุเฉลี่ย');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('populations');
    }
};
