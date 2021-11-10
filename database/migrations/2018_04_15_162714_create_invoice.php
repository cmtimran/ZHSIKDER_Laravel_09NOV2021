<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('invoice_id');
            $table->string('class_name');
            $table->string('student_roll');
            $table->string('title');
            $table->string('waber');
            $table->string('waber_purpose');
            $table->string('Payment');
            $table->string('from_date');
            $table->string('to_date');
            $table->string('account_name');
            $table->string('invoice_creator');
            $table->string('templete_id');
            $table->string('on_net_total');
            $table->string('cash_status');
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
        Schema::dropIfExists('invoice');
    }
}
