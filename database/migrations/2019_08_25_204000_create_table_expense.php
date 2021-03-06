<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExpense extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('expense')) {
        Schema::create('expense', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('transportationFlag')->default(false);
            $table->unsignedBigInteger('transportationId')->default(0);
            $table->boolean('shoppingFlag')->default(false);
            $table->unsignedBigInteger('shoppingId')->default(0);
            $table->boolean('othersFlag')->default(false);
            $table->unsignedBigInteger('othersId')->default(0);
            $table->bigInteger('costTotal');
            $table->date('activityDate');
            $table->time('activityTime');
            $table->string('receipt', 200)->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if (Schema::hasTable('expense')) {
        Schema::dropIfExists('expense');
      }
    }
}
