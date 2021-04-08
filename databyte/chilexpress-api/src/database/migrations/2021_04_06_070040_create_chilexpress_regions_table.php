<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChilexpressRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chilexpress_regions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('regionId');
            $table->string('regionName')->index();
            $table->tinyInteger('ineRegionCode');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chilexpress_regions');
    }
}
