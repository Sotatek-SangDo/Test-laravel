<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('package_id');
            $table->decimal('price', 8, 2);
            $table->decimal('qty');
            $table->decimal('weight');
            $table->date('date_created');
            $table->date('date_updated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_detail');
    }
}
