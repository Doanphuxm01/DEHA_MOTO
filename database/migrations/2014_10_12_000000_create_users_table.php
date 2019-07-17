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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('password')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            
            // lấy ảnh của các tài khoẻn
            $table->integer('ruler')->default(0);
            // phân quyền admin . nếu là 0 tức là admin còn là 1 thì là khách hàng
            $table->integer('status')->default(0);
            // 0: tài khoản này chưa kích hoạt , sẽ có mail gửi về kèm theo 1 link kích hoạt người dùng
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
