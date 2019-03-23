<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_dung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ho_ten');
            $table->string('email')->unique();
     //       $table->timestamp('email_verified_at')->nullable();
            $table->string('dia_chi');
            $table->string('so_dien_thoai');
            $table->string('password');
            $table->integer('vai_tro_id')->unsigned();
            $table->foreign('vai_tro_id')->references('id')->on('vai_tro')
            ->onUpdate('cascade')->onDelete('cascade');
     //       $table->rememberToken();
          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoi_dung');
    }
}
