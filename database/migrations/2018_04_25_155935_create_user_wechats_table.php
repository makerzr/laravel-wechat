<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWechatsTable extends Migration
{
    const TABLE = 'user_wechats';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->increments('id');
            $table->string('open_id')->unique()->comment('微信openId');
            $table->integer('user_id')->comment('用户id');
            $table->string('nickname')->comment('微信昵称');
            $table->string('avatar')->comment('微信头像');
            $table->string('remark')->nullable()->comment('微信备注');
            $table->softDeletes();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE `'. self::TABLE .'` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;');
        DB::statement('ALTER TABLE `' . self::TABLE . '` COMMENT="用户微信"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_wechats');
    }
}
