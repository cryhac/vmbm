<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->increments('id')->comment('用户ID');
            $table->integer('site_id')->nullable()->comment('站点ID');
            $table->char('username', 64)->nullable()->comment('登录名');
            $table->char('real_name', 20)->comment('姓名');
            $table->string('password', 255)->nullable()->comment('密码');
            $table->string('email', 100)->comment('EMAIL');
            $table->char('mobile', 11)->comment('手机号');
            $table->string('avatar', 255)->comment('用户头像');
            $table->tinyInteger('gender')->comment('性别,1:男,2:女,参照数据字典');
            $table->integer('province')->nullable()->comment('居住地址省');
            $table->integer('city')->nullable()->comment('居住地址市');
            $table->integer('county')->nullable()->comment('居住地址区县');
            $table->tinyInteger('work_type')->nullable()->comment('工作类型：上班，自由职业者');
            $table->text('other_info')->nullable()->comment('配偶或其他信息');
            $table->string('address', 255)->comment('详细地址');
            $table->unsignedTinyInteger('address_time')->nullable()->comment('居住时长');
            $table->unsignedTinyInteger('home_type')->nullable()->comment('居住类型');
            $table->char('idcard', 20)->nullable()->comment('身份证号');
            $table->string('idcard_positive', 500)->nullable()->comment('身份证正面');
            $table->string('idcard_back', 500)->nullable()->comment('身份证背面');
            $table->string('photo', 500)->nullable()->comment('正面照');
            $table->string('zhima_img', 500)->nullable()->comment('芝麻信用');
            $table->string('other_img', 500)->nullable();
            $table->string('driver_img', 500)->nullable();
            $table->tinyInteger('educational')->nullable()->comment('学历');
            $table->tinyInteger('marital')->nullable()->comment('婚姻状况');
            $table->tinyInteger('contact_bind')->nullable()->comment('直系亲属联系人关系');
            $table->char('contact_name', 32)->nullable()->comment('直系亲属联系人姓名');
            $table->char('contact_mobile', 11)->nullable()->comment('直系亲属联系人手机');
            $table->tinyInteger('other_contact_bind')->nullable()->comment('其他联系人关系');
            $table->char('other_contact_name', 32)->nullable()->comment('直系亲属联系人姓名');
            $table->char('other_contact_mobile', 11)->nullable()->comment('直系亲属联系人手机');
            $table->string('xuexin_account', 20)->nullable()->comment('学信网账号');
            $table->string('xuexin_password', 60)->nullable()->comment('学信网密码');
            $table->char('carrieroperator_mobile', 11)->nullable()->comment('运营商手机');
            $table->dateTime('last_login_time')->nullable()->comment('最后一次登录时间');
            $table->string('remember_token', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('deleted_at', 'idx_deleted_at');

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_info');
    }
}