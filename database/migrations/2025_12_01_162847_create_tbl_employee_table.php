<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_employee', function (Blueprint $table) {
            $table->increments('employee_id');
            $table->string('employee_name', 60);
            $table->string('jabatan', 30);
            $table->date('tgl_kerja');
            $table->integer('gaji');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_employee');
    }
};
