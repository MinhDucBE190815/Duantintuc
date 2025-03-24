<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('tin', function (Blueprint $table) {
            $table->id(); // Tự động tạo khóa chính và AUTO_INCREMENT
            $table->string('Tieude');
            $table->text('Noidung');
            $table->text('Tomtat');
            $table->date('Ngaydang');
            $table->integer('Loaiid');
            $table->timestamps();// Thêm `created_at` và `updated_at`
        });
    }

    public function down()
    {
        Schema::table('tin', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
};
