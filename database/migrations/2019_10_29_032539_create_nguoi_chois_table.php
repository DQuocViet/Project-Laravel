<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoiChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_choi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_dang_nhap');
            $table->string('mat_khau');
            $table->string('email');
            $table->string('hinh_dai_dien');
            $table->integer('diem_cao_nhat')->default(0);
            $table->integer('credit')->default(0);
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
        Schema::dropIfExists('nguoi_choi');
    }
}