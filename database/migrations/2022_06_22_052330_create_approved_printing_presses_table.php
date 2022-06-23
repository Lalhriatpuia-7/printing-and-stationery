<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approved_printing_presses', function (Blueprint $table) {
            $table->id();
            $table->string('printing_press_name');
            $table->foreignId('person_id')->constrained('people')->cascadeOnDelete();
            $table->string('press_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('approved_printing_presses', function (Blueprint $table) {
            $table->dropForeign('person_id');
            $table->dropColumn('person_id');
        });
        Schema::dropIfExists('approved_printing_presses');
    }
};